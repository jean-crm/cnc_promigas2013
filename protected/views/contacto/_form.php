<div class="row-fluid">
        <?php
    /* @var $this ContactoController */
    /* @var $model Contacto */
    /* @var $form CActiveForm */
    ?>

    <div class="form">

        <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contacto-form',
	'enableAjaxValidation'=>false,
        'errorMessageCssClass' => 'alert alert-error',
)); ?>

        <p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

        <?php echo $form->errorSummary($model, NULL, NULL, array('class'=>'alert alert-error')); ?>

                    <div class="control-group">
                <?php echo $form->labelEx($model,'id_con'); ?>
                <?php echo $form->textField($model,'id_con'); ?>
                <?php echo $form->error($model,'id_con'); ?>
            </div>

                        <div class="control-group">
                <?php echo $form->labelEx($model,'cod_empleado'); ?>
                <?php echo $form->textField($model,'cod_empleado',array('size'=>50,'maxlength'=>50)); ?>
                <?php echo $form->error($model,'cod_empleado'); ?>
            </div>

                        <div class="control-group">
                <?php echo $form->labelEx($model,'vp'); ?>
                <?php echo $form->textField($model,'vp',array('size'=>60,'maxlength'=>150)); ?>
                <?php echo $form->error($model,'vp'); ?>
            </div>

                        <div class="control-group">
                <?php echo $form->labelEx($model,'id_vp'); ?>
                <?php echo $form->textField($model,'id_vp',array('size'=>10,'maxlength'=>10)); ?>
                <?php echo $form->error($model,'id_vp'); ?>
            </div>

                        <div class="control-group">
                <?php echo $form->labelEx($model,'nom_contacto'); ?>
                <?php echo $form->textField($model,'nom_contacto',array('size'=>60,'maxlength'=>200)); ?>
                <?php echo $form->error($model,'nom_contacto'); ?>
            </div>

                        <div class="control-group">
                <?php echo $form->labelEx($model,'unidad'); ?>
                <?php echo $form->textField($model,'unidad',array('size'=>60,'maxlength'=>100)); ?>
                <?php echo $form->error($model,'unidad'); ?>
            </div>

                        <div class="control-group">
                <?php echo $form->labelEx($model,'id_unidad'); ?>
                <?php echo $form->textField($model,'id_unidad',array('size'=>10,'maxlength'=>10)); ?>
                <?php echo $form->error($model,'id_unidad'); ?>
            </div>

                        <div class="control-group">
                <?php echo $form->labelEx($model,'nom_servicio'); ?>
                <?php echo $form->textField($model,'nom_servicio',array('size'=>60,'maxlength'=>200)); ?>
                <?php echo $form->error($model,'nom_servicio'); ?>
            </div>

                        <div class="control-group">
                <?php echo $form->labelEx($model,'id_servicio'); ?>
                <?php echo $form->textField($model,'id_servicio',array('size'=>10,'maxlength'=>10)); ?>
                <?php echo $form->error($model,'id_servicio'); ?>
            </div>

                        <div class="control-group">
                <?php echo $form->labelEx($model,'email'); ?>
                <?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>400)); ?>
                <?php echo $form->error($model,'email'); ?>
            </div>

                        <div class="control-group">
                <?php echo $form->labelEx($model,'empresa'); ?>
                <?php echo $form->textField($model,'empresa',array('size'=>20,'maxlength'=>20)); ?>
                <?php echo $form->error($model,'empresa'); ?>
            </div>

                    <div class="control-group">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array('class' => 'btn')); ?>
        </div>

        <?php $this->endWidget(); ?>

    </div><!-- form -->
</div>