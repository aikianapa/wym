<?php

/*
    В этом файле можно добалять фукции проекта, которые будут доступны во всех php файлах проекта и шаблонах
    */

    setlocale(LC_ALL, 'ru_RU.utf8');
    @include_once(__DIR__ . '/engine/modules/yonger/common/scripts/functions.php');

    function beforeShow($out)
    {
        $out = yongerLinks($out);
        return $out;
    }

    function datetext($date)
    {
        return trim(strftime('%e %B %Y', strtotime($date)));
    }


    function text2tel($str)
    {
        $tel =  preg_replace("/\D/", '', $str);
        if (strlen($tel) == 11 && substr($tel, 0, 1) == "8") {
            $tel = "7" . substr($tel, 1);
        }
        return $tel;
    }

    function supertel($str) {
        $res = '';
        $tel =  preg_replace("/\D/", '', $str);
        $res .= substr($tel,0,1).' ';
        $res .= '('.substr($tel, 1, 3) . ') ';
        $res .= '<b>'.substr($tel, 4, 3) . '-';
        $res .= substr($tel, 7, 2) . '-';
        $res .= substr($tel, 9, 2).'</b>';
        return $res;
    }

function fileinfo($file)
{
    $file = __DIR__ . $file;
    if (is_file($file)) {
        $ext = pathinfo($file, PATHINFO_EXTENSION);
        $modif = date("d.m.y H:i", filemtime($file));
        $size = filesize($file);
        if ($size > 1024 * 1024 * 1024) {
            $size = sprintf("%u", $size / (1024 * 1024 * 1024)) . "Гб";
        } elseif ($size > 1024 * 1024) {
            $size = sprintf("%u", $size / (1024 * 1024)) . "Мб";
        } elseif ($size > 1024) {
            $size = sprintf("%u", $size / 1024) . "Кб";
        } else {
            $size .= "";
        }
        $list = array("modif" => $modif, "size" => $size, "ext" => strtoupper($ext), "name" => basename($file));
    } else {
        $list = array("modif" => '', "size" => '0 Кб', "ext" => '', "name" => basename($file));
    }
    return $list;
}
?>