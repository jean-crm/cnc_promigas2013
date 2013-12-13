<?php
/* @var $this AuthitemChildController */
/* @var $model AuthitemChild */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
            ));
    ?>

    <div class="control-group">
        <?php echo $form->labelEx($model, 'itemname'); ?>
        <?php echo $form->dropDownList($model, 'itemname', Authitem::model()->getAuthItem(), array('empty' => 'Todos')); ?>
    </div>

    <div class="control-group">
        <?php echo $form->labelEx($model, 'userid'); ?>
        <?php echo $form->dropDownList($model, 'userid', User::model()->getUsers(), array('empty' => 'Todos')); ?>
    </div>

    <div class="control-group">
        <?php echo CHtml::submitButton('Buscar', array('class' => 'btn')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->