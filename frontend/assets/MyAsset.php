<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class MyAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/mysite.css',
    ];
    public $js = [
        'js/Myjs.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}