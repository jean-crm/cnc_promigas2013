<div class="row-fluid">
    <?php
    /* @var $this AuthitemController */
    /* @var $model Authitem */
    /* @var $form CActiveForm */
    ?>

    <div class="form">

        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'authitem-form',
            'enableAjaxValidation' => false,
            'errorMessageCssClass' => 'alert alert-error',
                ));
        ?>

        <p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

        <?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-error')); ?>

        <div class="control-group">
            <?php echo $form->labelEx($model, 'name'); ?>
            <?php echo $form->textField($model, 'name', array('size' => 60, 'maxlength' => 64)); ?>
            <?php echo $form->error($model, 'name'); ?>
        </div>

        <div class="control-group">
            <?php echo $form->labelEx($model, 'type'); ?>
            <?php echo $form->dropDownList($model, 'type', $model->getTipo()); ?>
            <?php echo $form->error($model, 'type'); ?>
        </div>

        <div class="control-group">
            <?php echo $form->labelEx($model, 'description'); ?>
            <?php echo $form->textArea($model, 'description', array('rows' => 6, 'cols' => 50)); ?>
            <?php echo $form->error($model, 'description'); ?>
        </div>

        <div class="control-group">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array('class' => 'btn')); ?>
        </div>

        <?php $this->endWidget(); ?>

    </div><!-- form -->
</div>