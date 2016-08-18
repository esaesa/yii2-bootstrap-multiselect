<?php
/**
 * Created by IntelliJ IDEA.
 * User: Islam
 * Date: 8/18/2016
 * Time: 9:36 AM
 */
namespace esa\multiselect;

use yii\web\AssetBundle;

class Yii2BootstrapMultiSelectAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/assets';
    public $js = [
        'js/ajax.js'
    ];

    public $depends = [
        'esa\multiselect\BootstrapMultiSelectAsset'
    ];
}