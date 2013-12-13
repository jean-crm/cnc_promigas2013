<div class="row-fluid">
    <?php
    /* @var $this UserController */
    /* @var $model User */
    /* @var $form CActiveForm */
    ?>

    <!-- nueva linea -->
    <div class="form">

        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'user-form',
            'enableAjaxValidation' => false,
            'errorMessageCssClass' => 'alert alert-error',
            ));
            ?>

            <p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

            <?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-error')); ?>
            <div class="span5">
                <div class="control-group">
                    <?php echo $form->labelEx($model, 'typeUser'); ?>
                    <?php echo $form->dropDownList($model, 'typeUser', User::model()->getTipoUser(), array('class'=>'select2')); ?>
                    <?php echo $form->error($model, 'typeUser'); ?>
                </div>
                <div class="control-group">
                    <?php echo $form->labelEx($model, 'nick'); ?>
                    <?php echo $form->textField($model, 'nick', array('size' => 50, 'maxlength' => 50)); ?>
                    <?php echo $form->error($model, 'nick'); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->labelEx($model, 'pass'); ?>
                    <?php echo $form->passwordField($model, 'pass', array('size' => 60, 'maxlength' => 100)); ?>
                    <?php echo $form->error($model, 'pass'); ?>
                </div>
                <div class="control-group">
                    <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array('class' => 'btn')); ?>
                </div>
            </div>
            <div class="span5">
                <div class="control-group">
                    <?php echo $form->labelEx($model, 'tipo_doc'); ?>
                    <?php echo $form->dropDownList($model, 'tipo_doc', $model->getTipoDoc(), array('class'=>'select2')); ?>
                    <?php echo $form->error($model, 'tipo_doc'); ?>
                </div>
                <div class="control-group">
                    <?php echo $form->labelEx($model, 'num_doc'); ?>
                    <?php echo $form->textField($model, 'num_doc', array('size' => 50, 'maxlength' => 50)); ?>
                    <?php echo $form->error($model, 'num_doc'); ?>
                </div>
                <div class="control-group">
                    <?php echo $form->labelEx($model, 'nombres'); ?>
                    <?php echo $form->textField($model, 'nombres', array('size' => 100, 'maxlength' => 100)); ?>
                    <?php echo $form->error($model, 'nombres'); ?>
                </div>
            </div>


            <?php $this->endWidget(); ?>

        </div><!-- form -->
    </div>
    <script type="text/javascript">
    $(function(){
        //select2 plugin
        $(".select2").select2();
    });
    </script>