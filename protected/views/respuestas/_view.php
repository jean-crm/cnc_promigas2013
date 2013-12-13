<?php
/* @var $this RespuestasController */
/* @var $data Respuestas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_con')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_con), array('view', 'id'=>$data->id_con)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_encuesta')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_encuesta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p1')); ?>:</b>
	<?php echo CHtml::encode($data->p1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p2')); ?>:</b>
	<?php echo CHtml::encode($data->p2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p3')); ?>:</b>
	<?php echo CHtml::encode($data->p3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p4')); ?>:</b>
	<?php echo CHtml::encode($data->p4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('razonp1')); ?>:</b>
	<?php echo CHtml::encode($data->razonp1); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('razonp2')); ?>:</b>
	<?php echo CHtml::encode($data->razonp2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('razonp3')); ?>:</b>
	<?php echo CHtml::encode($data->razonp3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('razonp4')); ?>:</b>
	<?php echo CHtml::encode($data->razonp4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyecto_innovacion')); ?>:</b>
	<?php echo CHtml::encode($data->proyecto_innovacion); ?>
	<br />

	*/ ?>

</div>