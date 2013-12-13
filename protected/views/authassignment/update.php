<?php
/* @var $this EncuestaController */
/* @var $model Encuesta */

$this->breadcrumbs = array(
    'Asignaciones de permisos' => array('index'),
    $model->itemname . ' - ' . $model->userid => array('view', 'itemname' => $model->itemname, 'userid' => $model->userid),
    'Editar',
);
//array('label' => 'Editar', 'url' => '#', 'linkOptions' => array('submit' => array('update', 'parent' => $model->parent, 'child' => $model->child))),
$this->menu = array(
    array('label' => '<i class="icon-th-list"></i> Listar', 'url' => array('index')),
    array('label' => '<i class="icon-plus-sign"></i> Crear', 'url' => array('create')),
    array('label' => '<i class="icon-zoom-in"></i> Detalles', 'url' => array('view', 'itemname' => $model->itemname, 'userid' => $model->userid)),
    array('label' => '<i class="icon-list-alt"></i> Reporte', 'url' => array('admin')),
);
?>

<h1>Editar Asignación de permiso:<br/> <?php echo $model->itemname . ' - ' . $model->userid; ?></h1>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>