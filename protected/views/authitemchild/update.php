<?php
/* @var $this EncuestaController */
/* @var $model Encuesta */

$this->breadcrumbs = array(
    'Jererquías de permisos' => array('index'),
    $model->parent . ' - ' . $model->child => array('view', 'parent' => $model->parent, 'child' => $model->child),
    'Actualizar',
);
//array('label' => 'Actualizar', 'url' => '#', 'linkOptions' => array('submit' => array('update', 'parent' => $model->parent, 'child' => $model->child))),
$this->menu = array(
    array('label' => '<i class="icon-th-list"></i> Listar', 'url' => array('index')),
    array('label' => '<i class="icon-plus-sign"></i> Crear', 'url' => array('create')),
    array('label' => '<i class="icon-zoom-in"></i> Detalles', 'url' => array('view', 'parent' => $model->parent, 'child' => $model->child)),
    array('label' => '<i class="icon-list-alt"></i> Reporte', 'url' => array('admin')),
);
?>

<h1>Actualizar Jerarquía de permiso:<br/> <?php echo $model->parent . ' - ' . $model->child; ?></h1>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>