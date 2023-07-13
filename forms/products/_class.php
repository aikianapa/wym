<?php
class productsClass extends cmsFormsClass {

    function beforeItemShow(&$item) {
        if (!$item) return;
        $data = $this->app->dot($item);
        isset($item['header'])  AND isset($item['header'][$_SESSION['lang']]) ? $item['header'] = $item['header'][$_SESSION['lang']] : null;
        isset($item['date']) ? $item['date'] = date('d.m.Y H:i',strtotime($item['date'])) : null;
        $data->get('cover.0.img') > '' ? null : $data->set('cover.0.img', '/assets/img/product-1.png');
        $item['link'] = '/catalog/'.wbFurlGenerate($item['header']);
        if ($this->app->vars('_route.mode')=='show') $this->prevnext($item);
    }

    public function afterItemRead(&$item) {
        if (!$item) return;
        if (isset($item['blocks'])) {
            foreach((array)$item['blocks'] as $block) {
                if (isset($block['name']) && $block['name'] == 'news-content') {
                    $item['type'] =  $block['type'];
                    $item['short'] =  $block['short'];
                    break;
                }              
            }
        } 
    }

    function prevnext(&$item) {
        $news = $this->app->itemList('news',['filter'=>['active'=>'on','type'=>$item['type']], 'sort' => 'date','return'=>'id,header']);
        $cuid = $item['id'];
        $news=array_values($news['list']);
        foreach($news as $i => &$line) {
            if ($line['id'] == $cuid) {
                isset($news[$i-1]) ? $prev = $news[$i-1]['header'] : $next = $news[count($news)-1]['header'];
                isset($news[$i+1]) ? $next = $news[$i+1]['header'] : $next = $news[0]['header'];
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

    function sort()
    {
        $data = $this->app->vars('_post');
        $res = ['error' => true];
        foreach ($data as $sort => $item) {
            $this->app->itemSave($this->app->route->form, [
                'id' => $item,
                '_sort' => wbSortIndex($sort)
            ], false);
            $res = ['error' => false];
        }
        $this->app->tableFlush($this->app->route->form);
        header("Content-type:application/json");
        echo json_encode($res);
        exit;
    }

}
?>