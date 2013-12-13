<?php
/* @var $this ContactoController */
/* @var $model Contacto */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="control-group">
		<?php echo $form->label($model,'id_con'); ?>
		<?php echo $form->textField($model,'id_con'); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'cod_empleado'); ?>
		<?php echo $form->textField($model,'cod_empleado',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'vp'); ?>
		<?php echo $form->textField($model,'vp',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'id_vp'); ?>
		<?php echo $form->textField($model,'id_vp',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'nom_contacto'); ?>
		<?php echo $form->textField($model,'nom_contacto',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'unidad'); ?>
		<?php echo $form->textField($model,'unidad',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'id_unidad'); ?>
		<?php echo $form->textField($model,'id_unidad',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'nom_servicio'); ?>
		<?php echo $form->textField($model,'nom_servicio',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'id_servicio'); ?>
		<?php echo $form->textField($model,'id_servicio',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>400)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'empresa'); ?>
		<?php echo $form->textField($model,'empresa',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="control-group">
		<?php echo CHtml::submitButton('Buscar', array('class' => 'btn')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->