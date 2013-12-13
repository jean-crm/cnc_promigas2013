<?php
/* @var $this AuthitemController */
/* @var $model Authitem */

$this->breadcrumbs = array(
    'Ítems de autorización' => array('index'),
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
	$('#authitem-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Reporte ítems de autorización</h1>

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
    'id' => 'authitem-grid',
    'dataProvider' => $model->search(),
//	'filter'=>$model,
    'columns' => array(
        'name',
        'type',
        'description',
        'bizrule',
        'data',
        array(
            'class' => 'CButtonColumn',
            'template' => '{detalle}',
            'buttons' => array(
                'detalle' => array(
                    'label' => '',
                    'options' => array(
                        'class' => 'icon-edit',
                    ),
                    'url' => 'Yii::app()->createUrl("authitem/view", array("id"=>$data->name))',
                ),
            ),
        ),
    ),
));
?>
