<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'auth-assignment-form',
        'enableAjaxValidation' => false,
        'errorMessageCssClass' => 'alert alert-error',
        ));
        ?>

        <p class="note">Los campos con <span class="required">*</span> son obligatotios.</p>

        <?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-error')); ?>

        <div class="control-group" title="Selecciona el item o elemento de autorización.">
            <?php echo $form->labelEx($model, 'itemname'); ?>
            <?php echo $form->dropDownList($model, 'itemname', Authitem::model()->getAuthItem(), array('class'=>'select2')); ?>
            <?php echo $form->error($model, 'itemname'); ?>
        </div>

        <div class="control-group" title="Selecciona el usuario al que se le asignará el elemento de autorización.">
            <?php echo $form->labelEx($model, 'userid'); ?>
            <?php echo $form->dropDownList($model, 'userid', User::model()->getUsers(), array('class'=>'select2')); ?>
            <?php echo $form->error($model, 'userid'); ?>
        </div>

        <div class="control-group">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Cuardar', array('class' => 'btn')); ?>
        </div>

        <?php $this->endWidget(); ?>

    </div><!-- form -->
    <script type="text/javascript">
    $(function(){
        //select2 plugin
        $(".select2").select2();
    });
    </script>