<?php
/**
 * Created by IntelliJ IDEA.
 * User: Islam
 * Date: 8/18/2016
 * Time: 9:36 AM
 */
namespace esa\multiselect;

use yii\web\AssetBundle;

class MultiSelectAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap-multiselect/dist';
    public $js = [
        'js/bootstrap-multiselect.js'
    ];
    public $css = [
        'css/bootstrap-multiselect.css'
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset'
    ];
}