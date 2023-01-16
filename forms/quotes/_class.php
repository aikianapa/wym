<?php
//use Nahid\JsonQ\Jsonq;

class quotesClass extends cmsFormsClass {
    public $app;

    function beforeItemSave(&$item) {
        $item['login'] = $this->app->vars('_sess.user.login');
        isset($item['status']) ? null : $item['status'] = 'new';
    }


    function afterItemSave(&$item)
    {
        $this->app->shadow('/cms/ajax/form/pages/list');
    }


    function beforeItemShow(&$item)
    {
        $item['phone'] = wbPhoneFormat($item['phone']);
    }


    function submit()
    {
        $res = [];
        $item = json_decode(file_get_contents('php://input'), true);
        if ($this->app->vars('_route.refferer')) {
            $msg = $this->app->fromString('<html><div class="mail"></div></html>');
            $msgbody = $msg->find('.mail');
            $flds = $item['flds'];
            unset($item['flds']);
            foreach ($item as $fld => $val) {
                $value ='';
                if ($val > '' && $fld !== '__token' && $fld !== 'file') {
                    $label = isset($flds[$fld]) ? $flds[$fld] : $fld;
                    $value = is_array($value) ? implode("<br>",$value) : $val;
                    if ($value > '') {
                        $msgbody->append('<div><b>'.$label.'</b>: '.$value.'</div>');
                    } 
                }
            }
        }

        header('Content-Type: application/json; charset=utf-8');

        $qnum = $this->app->module('autoinc');
        $file = null;

        foreach ($item as $key => $value) {
            if (preg_match("/^project-|source-/", $key)) {
                $fld = explode('-', $key);
                isset($item[$fld[0]]) ? null : $item[$fld[0]] = [];
                $value == 'on' ? $item[$fld[0]][] = $fld[1] : null;
                unset($item[$key]);
            } elseif (is_string($value) && preg_match("/^data:.*;base64,/m", $value)) {
                $mime = substr($value, 0, 30);
                $base = strpos($mime, ';base64');
                $mime = substr($mime, 0, $base);
                $mime = substr($mime, 5);
                $atch = base64_decode(substr($value, $base + 8));
                $ext = $this->app->mimeExt($mime);
                $file = '/uploads/quotes/'.wbNewId().'.'.$ext;
                wbPutContents($this->app->vars('_env.path_app').$file, $atch);
                $item[$key] = [['img'=>$file,'title'=>'','alt'=>'']];
            }
        }
        $item['number'] = $qnum->inc('quotes', 'number', 1000);
        if (isset($msgbody)) {
            $msgbody->prepend('<h3>Заявка №'.$item['number'].'</h3>');
            $subj = $msg->find('.mail > h3')->text();
            $from = isset($item['email']) && $item['email']>'' ? $item['email'].';'.$item['name'] : 'robot@gmail.com;Перезвоните мне';
            $sent = $this->app->vars('_sett.quotes_email') > '' ? $this->app->vars('_sett.quotes_email') : $this->app->vars('_sett.email');
            $file = ($file > ' ') ? $this->app->vars('_env.path_app').$file : [];
            $this->app->mail($from, $sent, $subj, $msg->html(), $file);
        }

        $item['_created'] = date('Y-m-d H:i:s');
        $item = $this->app->itemSave('quotes', $item, true);
        $res = ($item) ? ['error'=>false,'item'=>$item] : ['error' => true, 'msg'=>'Сообщение не отправлено.'];
        return json_encode($res);
    }

}
?>