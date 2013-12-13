<?php
$this->breadcrumbs=array(
	'Jererquías de permisos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'<i class="icon-th-list"></i> Listar', 'url'=>array('index')),
	array('label'=>'<i class="icon-list-alt"></i> Reporte', 'url'=>array('admin')),
);
?>

<h1>Crear Jererquía de permisos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>