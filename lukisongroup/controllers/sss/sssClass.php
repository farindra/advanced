<?php
/**
 * Created by PhpStorm.
 * User: Farindra
 * Date: 6/21/15
 * Time: 10:09 AM
 */

namespace lukisongroup\controllers\sss;


class sssClass {
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
    public  function  upJson($file,$data)
    {
        $myfile = fopen(SSS_JSON_PATH.$file.'.json', "w") or die("Unable to open file!");
        $txt = $data;
        fwrite($myfile, $txt);
        fclose($myfile);
    }

    public  function  getJson($file)
    {
        return SSS_JSON_PATH.$file.'.json';
    }
} 