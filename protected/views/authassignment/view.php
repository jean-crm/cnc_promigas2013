<?php
/* @var $this EncuestaController */
/* @var $model Encuesta */

$this->breadcrumbs = array(
    'Asignaciones de permisos' => array('index'),
    $model->itemname . ' - ' . $model->userid,
);

$this->menu = array(
    array('label' => '<i class="icon-th-list"></i> Listar', 'url' => array('index')),
    array('label' => '<i class="icon-plus-sign"></i> Crear', 'url' => array('create')),
    array('label' => '<i class="icon-pencil"></i> Editar', 'url' => '#', 'linkOptions' => array('submit' => array('update', 'itemname' => $model->itemname, 'userid' => $model->userid))),
    array('label' => '<i class="icon-trash"></i> Eliminar', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'itemname' => $model->itemname, 'userid' => $model->userid), 'confirm' => '¿Está seguro de eliminar éste ítem?')),
    array('label' => '<i class="icon-list-alt"></i> Reporte', 'url' => array('admin')),
);
?>

<h1>Detalles Asignación de permiso: <br/><?php echo $model->itemname . ' - ' . $model->userid; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'itemname',
        'userid',
    ),
));
?>
