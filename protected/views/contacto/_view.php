<?php
/* @var $this ContactoController */
/* @var $data Contacto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_con')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_con), array('view', 'id'=>$data->id_con)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_empleado')); ?>:</b>
	<?php echo CHtml::encode($data->cod_empleado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vp')); ?>:</b>
	<?php echo CHtml::encode($data->vp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_vp')); ?>:</b>
	<?php echo CHtml::encode($data->id_vp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_contacto')); ?>:</b>
	<?php echo CHtml::encode($data->nom_contacto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unidad')); ?>:</b>
	<?php echo CHtml::encode($data->unidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_unidad')); ?>:</b>
	<?php echo CHtml::encode($data->id_unidad); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_servicio')); ?>:</b>
	<?php echo CHtml::encode($data->nom_servicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_servicio')); ?>:</b>
	<?php echo CHtml::encode($data->id_servicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('empresa')); ?>:</b>
	<?php echo CHtml::encode($data->empresa); ?>
	<br />

	*/ ?>

</div>