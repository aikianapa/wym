<?php
class newsClass extends cmsFormsClass {

    function beforeItemShow(&$item) {
        if (!$item) return;
        $data = $this->app->dot($item);
        isset($item['header'])  AND isset($item['header'][$_SESSION['lang']]) ? $item['header'] = $item['header'][$_SESSION['lang']] : null;
        isset($item['date']) ? $item['date'] = date('d.m.Y H:i',strtotime($item['date'])) : null;
        $data->get('cover.0.img') > '' ? null : $data->set('cover.0.img', '/assets/img/placeholder.jpg');
        $item['link'] = yongerFurl($item);
        $this->prevnext($item);
    }

    public function afterItemRead(&$item) {
        if (!$item) return;
        if (isset($item['blocks'])) {
            foreach((array)$item['blocks'] as $block) {
                if ($block['name'] == 'news-content') {
                    $item['type'] =  $block['type'];
                    $item['short'] =  $block['short'];
                    break;
                }              
            }
        } else {
            $item['type'] = 'n';
            $item['short'] = '';
        }
    }

    function prevnext(&$item) {
        $news = $this->app->itemList('news',['filter'=>['active'=>'on','type'=>$item['type']], 'sort' => 'date','return'=>'id,header,active,type,date']);
        $cuid = $item['id'];
        $news=array_values($news['list']);
        foreach($news as $i => &$line) {
            if ($line['id'] == $cuid) {
                isset($news[$i-1]) ? $prev = $news[$i-1]['header'] : $prev = $news[count($news)-1]['header'];
                isset($news[$i+1]) ? $next = $news[$i+1]['header'] : $next = $news[0]['header'];
                break;
            } 
        }
        isset($prev) ? null : $prev = $line['header'];
        isset($next) ? null : $next = $line['header'];
        is_array($prev) && isset($prev[$_SESSION['lang']]) ? $prev = $prev[$_SESSION['lang']] : null;
        is_array($next) && isset($next[$_SESSION['lang']]) ? $next = $next[$_SESSION['lang']] : null;
        $prev = '/news/'.wbFurlGenerate($prev);
        $next = '/news/' . wbFurlGenerate($next);
        $item['prevnext'] = ['prev'=>$prev,'next'=>$next];
    }
}
?>