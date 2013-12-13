<?php
Yii::import('system.web.widgets');
//Yii::import('system.web.helpers.CHtml');
class JCActiveForm extends CActiveForm {

    public function radioButtonList($model, $attribute, $data, $htmlOptions = array()) {
        return JCHtml::activeRadioButtonList($model, $attribute, $data, $htmlOptions);
    }

}

?>
