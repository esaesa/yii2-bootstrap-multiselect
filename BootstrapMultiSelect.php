<?php
/**
 * Created by IntelliJ IDEA.
 * User: Islam
 * Date: 8/18/2016
 * Time: 9:39 AM
 */
namespace esa\multiselect;


use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;
use yii\base\InvalidConfigException;

class BootstrapMultiSelect extends InputWidget
{
    /**
     * @var array data for generating the list options (value=>display)
     */
    public $data = [];
    /**
     * @var array the options for the Bootstrap Multiselect JS plugin.
     * Please refer to the Bootstrap Multiselect plugin Web page for possible options.
     * @see http://davidstutz.github.io/bootstrap-multiselect/#options
     */
    public $clientOptions = [];

    public $ajax = [];

    /**
     * Initializes the widget.
     */
    public function init()
    {
        if (empty($this->data)) {
            throw new  InvalidConfigException('"Multiselect::$data" attribute cannot be blank or an empty array.');
        }
        parent::init();
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        if ($this->hasModel()) {
            echo Html::activeListBox($this->model, $this->attribute, $this->data, $this->options);
        } else {
            echo Html::listBox($this->name, $this->value, ($this->ajax) ? $this->data : null, $this->options);
        }
        $this->registerPlugin();
    }

    /**
     * Registers MultiSelect Bootstrap plugin and the related events
     */
    protected function registerPlugin()
    {
        $view = $this->getView();
        Yii2BootstrapMultiSelectAsset::register($view);
        $id = $this->options['id'];
        $options = $this->clientOptions !== false && !empty($this->clientOptions)
            ? Json::encode($this->clientOptions)
            : '';
        $js = "jQuery('#$id').multiselect($options);";

        $view->registerJs($js);
        if ($this->ajax && $this->ajax['url']) {
            $js = <<<EOD
               fillAjax("$id","{$this->ajax['url']}")
EOD;
            $view->registerJs($js);

        }
    }
}