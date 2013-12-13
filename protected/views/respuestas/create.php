<?php
/* @var $this RespuestasController */
/* @var $model Respuestas */

// $this->breadcrumbs=array(
// 	'Respuestases'=>array('index'),
// 	'Crear',
// );

// $this->menu=array(
// 	array('label'=>'<i class="icon-th-list"></i> Listar', 'url'=>array('index')),
// 	array('label'=>'<i class="icon-list-alt"></i> Reporte', 'url'=>array('admin')),
// );
?>
<h1><?php echo $contacto->unidad; ?></h1>
<legend><?php echo $contacto->nom_servicio; ?></legend>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'contacto'=>$contacto)); ?>