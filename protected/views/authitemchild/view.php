<?php
/* @var $this EncuestaController */
/* @var $model Encuesta */

$this->breadcrumbs = array(
    'Jerarquía de Permisos' => array('index'),
    $model->parent . ' - ' . $model->child,
);

$this->menu = array(
    array('label' => '<i class="icon-th-list"></i> Listar', 'url' => array('index')),
    array('label' => '<i class="icon-plus-sign"></i> Crear', 'url' => array('create')),
    array('label' => '<i class="icon-pencil"></i> Actualizar', 'url' => '#', 'linkOptions' => array('submit' => array('update', 'parent' => $model->parent, 'child' => $model->child))),
    array('label' => '<i class="icon-trash"></i> Eliminar', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'parent' => $model->parent, 'child' => $model->child), 'confirm' => '¿Está seguro de eliminar éste ítem?')),
    array('label' => '<i class="icon-list-alt"></i> Reporte', 'url' => array('admin')),
);
?>

<h1>Detalles Jerarquía de permiso: <br/><?php echo $model->parent . ' - ' . $model->child; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        array(
            'name' => 'parent',
            'value' => $model->getParent($model),
        ),
        array(
            'name' => 'child',
            'value' => $model->getChild($model),
        ),
    ),
));
?>
