<?php
/**
 * Created by IntelliJ IDEA.
 * User: Islam
 * Date: 8/18/2016
 * Time: 9:34 AM
 */

namespace esa\multiselect;

use yii\web\AssetBundle;

class BootstrapMultiSelectAsset extends AssetBundle
{
    public $sourcePath = '@bower/multiselect';
    public $js = [
        'js/jquery.multi-select.js'
    ];
    public $css = [
        'css/multi-select.css'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}