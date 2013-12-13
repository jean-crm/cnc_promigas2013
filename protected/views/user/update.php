<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs = array(
    'Usuarios' => array('index'),
    $model->id => array('view', 'id' => $model->id),
    'Editar',
);

$this->menu = array(
    array('label' => '<i class="icon-th-list"></i> Listar', 'url' => array('index')),
    array('label' => '<i class="icon-plus-sign"></i> Crear', 'url' => array('create')),
    array('label' => '<i class="icon-zoom-in"></i> Detalles', 'url' => array('view', 'id' => $model->id)),
    array('label' => '<i class="icon-list-alt"></i> Reporte', 'url' => array('admin')),
);
?>

<h1>Editar Usuario <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>