<?php
/* @var $this AuthitemchildController */
/* @var $model Authitemchild */

$this->breadcrumbs = array(
    'Jerarquia de Items' => array('index'),
    'Gestionar',
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
	$('#authitemchild-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestionar Jerarquia de items</h1>

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
    'id' => 'authitemchild-grid',
    'itemsCssClass' => 'table table-striped table-bordered dataTable',
    'dataProvider' => $model->search(),
//	'filter'=>$model,
    'columns' => array(
        'parent',
        'child',
        array(
            'class' => 'CButtonColumn',
            'template' => '{detalle}',
            'buttons' => array(
                'detalle' => array(
                    'label' => '',
                    'options' => array(
                        'class' => 'icon-edit',
                    ),
                    'url' => 'Yii::app()->createUrl("authitemchild/view", array("parent"=>$data->parent, "child"=>$data->child))',
                ),
            ),
        ),
    ),
));
?>
