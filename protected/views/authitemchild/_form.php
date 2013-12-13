<div class="row-fluid">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'auth-item-form',
        'enableAjaxValidation' => false,
        'errorMessageCssClass' => 'alert alert-error',
            ));
    ?>

    <p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

    <?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-error')); ?>

    <div class="control-group" title="Selecciona el elemento de autorización padre.">
        <?php echo $form->labelEx($model, 'parent'); ?>
        <?php echo $form->dropDownList($model, 'parent', Authitem::model()->getAuthItem()); ?>
        <?php echo $form->error($model, 'parent'); ?>
    </div>

    <div class="control-group" title="Selecciona el elemento de autorización hijo.">
        <?php echo $form->labelEx($model, 'child'); ?>
        <?php echo $form->dropDownList($model, 'child', Authitem::model()->getAuthItem()); ?>
        <?php echo $form->error($model, 'child'); ?>
    </div>

    <div class="control-group">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array('class' => 'btn')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->