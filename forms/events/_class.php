<?php
class eventsClass extends cmsFormsClass {

    function beforeItemShow(&$item) {
        if (!$item) return;
        $data = $this->app->dot($item);
        $date = date('d.m.Y', strtotime($item['date']));
        isset($item['header'])  AND isset($item['header'][$_SESSION['lang']]) ? $item['header'] = $item['header'][$_SESSION['lang']] : null;
        $item['expired'] = date('Y-m-d') > $date ? true : false; 
        isset($item['date']) ? $item['date'] = $date : null;
        $data->get('cover.0.img') > '' ? null : $data->set('cover.0.img', '/assets/img/placeholder.jpg');
        $item['link'] = yongerFurl($item);
        $this->prevnext($item);
    }

    public function afterItemRead(&$item) {
        if (!$item) return;
        if (isset($item['blocks'])) {
            foreach((array)$item['blocks'] as $block) {
                if ($block['name'] == 'events-content') {
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
        $events = $this->app->itemList('events',['filter'=>['active'=>'on','type'=>$item['type']], 'sort' => 'date','return'=> 'id,header,active,type,date']);
        $cuid = $item['id'];
        $events=array_values($events['list']);
        foreach($events as $i => &$line) {
            if ($line['id'] == $cuid) {
                isset($events[$i-1]) ? $prev = $events[$i-1]['header'] : $prev = $events[count($events)-1]['header'];
                isset($events[$i+1]) ? $next = $events[$i+1]['header'] : $next = $events[0]['header'];
            } 
        }
        isset($prev) ? null : $prev = $line['header'];
        isset($next) ? null : $next = $line['header'];
        is_array($prev) && isset($prev[$_SESSION['lang']]) ? $prev = $prev[$_SESSION['lang']] : null;
        is_array($next) && isset($next[$_SESSION['lang']]) ? $next = $next[$_SESSION['lang']] : null;
        $prev = '/events/'.wbFurlGenerate($prev);
        $next = '/events/' . wbFurlGenerate($next);
        $item['prevnext'] = ['prev'=>$prev,'next'=>$next];
    }
}
?>