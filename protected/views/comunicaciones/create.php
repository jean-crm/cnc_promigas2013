<?php
/* @var $this ComunicacionesController */
/* @var $model Comunicaciones */

$this->breadcrumbs=array(
	'Comunicaciones'=>array('index'),
	'Crear',
);

// $this->menu=array(
// 	array('label'=>'<i class="icon-th-list"></i> Listar', 'url'=>array('index')),
// 	array('label'=>'<i class="icon-list-alt"></i> Reporte', 'url'=>array('admin')),
// );
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>