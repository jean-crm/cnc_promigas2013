<?php
/* @var $this RespuestasController */
/* @var $model Respuestas */
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
		<?php echo $form->label($model,'fecha_encuesta'); ?>
		<?php echo $form->textField($model,'fecha_encuesta'); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'p1'); ?>
		<?php echo $form->textField($model,'p1'); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'p2'); ?>
		<?php echo $form->textField($model,'p2'); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'p3'); ?>
		<?php echo $form->textField($model,'p3'); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'p4'); ?>
		<?php echo $form->textField($model,'p4'); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'razonp1'); ?>
		<?php echo $form->textField($model,'razonp1',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'razonp2'); ?>
		<?php echo $form->textField($model,'razonp2',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'razonp3'); ?>
		<?php echo $form->textField($model,'razonp3',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'razonp4'); ?>
		<?php echo $form->textField($model,'razonp4',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'proyecto_innovacion'); ?>
		<?php echo $form->textField($model,'proyecto_innovacion',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="control-group">
		<?php echo CHtml::submitButton('Buscar', array('class' => 'btn')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->