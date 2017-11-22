<?php

namespace egorov\uikit3;

use yii\web\AssetBundle;

class UikitAsset extends AssetBundle
{
    public $sourcePath = '@vendor/egorov/yii2-uikit/dist';

    public $css = [
        'css/uikit.min.css'
    ];

    public $js = [
        'js/uikit.min.js',
        'js/uikit-icons.min.js'
    ];

    public $depends = [
        'yii\web\YiiAsset'
    ];
}
