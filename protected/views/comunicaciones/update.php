<?php
/* @var $this ComunicacionesController */
/* @var $model Comunicaciones */

$this->breadcrumbs=array(
	'Comunicaciones'=>array('index'),
	$model->cod_empleado=>array('view','id'=>$model->cod_empleado),
	'Editar',
);

$this->menu=array(
	array('label'=>'<i class="icon-th-list"></i> Listar', 'url'=>array('index')),
	array('label'=>'<i class="icon-plus-sign"></i> Crear', 'url'=>array('create')),
	array('label'=>'<i class="icon-zoom-in"></i> Detalles', 'url'=>array('view', 'id'=>$model->cod_empleado)),
	array('label'=>'<i class="icon-list-alt"></i> Reporte', 'url'=>array('admin')),
);
?>

<h1>Editar Comunicaciones <?php echo $model->cod_empleado; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>