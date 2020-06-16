<?php 
namespace app\widgets;

class CustomActiveField extends \yii\widgets\ActiveField
{
    public $options = ['class' => 'form-group row'];
    public $labelOptions = ['class' => 'col-form-label col-2'];
    public $inputOptions = ['class' => 'form-control'];
    public $errorOptions = ['tag' => 'div', 'class' => 'form-control-feedback', 'style' => 'font-size: 0.85rem;font-weight: 300;'];
    public $hintOptions = ['class' => 'm-form__help', 'tag' => 'span'];
    // public $template = "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}";
    
    public function textInput($options = [])
    {
        if (empty($options['placeholder'])) {
            $options['placeholder'] = $this->model->getAttributeLabel($this->attribute);
        }
        return parent::textInput($options);
    }

    public function textarea($options = [])
    {
        if (empty($options['placeholder'])) {
            $options['placeholder'] = $this->model->getAttributeLabel($this->attribute);
        }
        return parent::textarea($options);
    }

    public function input($type, $options = [])
    {
        if (empty($options['placeholder'])) {
            $options['placeholder'] = $this->model->getAttributeLabel($this->attribute);
        }
        return parent::input($options);
    }
}