<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs = array(
    'Usuarios' => array('index'),
    'Reporte',
);

$this->menu = array(
    array('label' => '<i class="icon-th-list"></i> Listar', 'url' => array('index')),
    array('label' => '<i class="icon-plus-sign"></i> Crear', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Reporte Usuarios</h1>

<?php echo CHtml::link('Búsqueda avanzada', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'itemsCssClass' => 'table table-striped table-bordered dataTable',
    'id' => 'user-grid',
    'dataProvider' => $model->search(),
//	'filter'=>$model,
    'columns' => array(
        'id',
        'nick',
        'nombres',
        array(
            'class' => 'CButtonColumn',
            'template' => '{view}',
            'buttons' => array(
                'view' => array(
                    'options' => array('style' => 'padding: none;'),
                ),
            ),
        ),
    ),
));
?>
