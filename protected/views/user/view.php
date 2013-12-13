<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs = array(
    'Usuarios' => array('index'),
    $model->id,
);

$this->menu = array(
    array('label' => '<i class="icon-th-list"></i> Listar', 'url' => array('index')),
    array('label' => '<i class="icon-plus-sign"></i> Crear', 'url' => array('create')),
    array('label' => '<i class="icon-pencil"></i> Editar', 'url' => array('update', 'id' => $model->id)),
    array('label' => '<i class="icon-trash"></i> Eliminar', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => '¿Está seguro de eliminar este ítem?')),
    array('label' => '<i class="icon-list-alt"></i> Reporte', 'url' => array('admin')),
);
?>

<h1>Detalles Usuario #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        array(
            'name' => 'typeUser',
            'value' => $model->getTipoUserText($model->typeUser),
        ),
        'nick',
        array(
            'name' => 'pass',
            'value' => $model->pass,
        ),
        array(
            'name' => 'tipo',
            'value' => $model->getTipoDocText($model->tipo_doc),
        ),
        array(
            'name' => 'num_doc',
            'value' => $model->num_doc,
        ),
        'nombres',
    ),
));
?>
