<?php
/* @var $this ComunicacionesController */
/* @var $model Comunicaciones */

$this->breadcrumbs=array(
	'Comunicaciones'=>array('index'),
	'Reporte',
);

$this->menu=array(
	array('label'=>'<i class="icon-th-list"></i> Listar', 'url'=>array('index')),
	array('label'=>'<i class="icon-plus-sign"></i> Crear', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#comunicaciones-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Reporte Comunicaciones</h1>

<?php echo CHtml::link('Búsqueda avanzada','#',array('class'=>'search-button')); ?><div class="row-fluid">
	<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
		'model'=>$model,
	)); ?>
	</div><!-- search-form -->
</div> <!-- row-fluid -->
<?php $this->widget('zii.widgets.grid.CGridView', array(
        'itemsCssClass' => 'table table-striped table-bordered dataTable',
	'id'=>'comunicaciones-grid',
	'dataProvider'=>$model->search(),
//	'filter'=>$model,
	'columns'=>array(
		'cod_empleado',
		'p1',
		'p2',
		'p3a',
		'p3b',
		'p3c',
		/*
		'p4_1',
		'p4_2',
		'p4_3',
		'p4_4',
		'p4_5',
		'p4_6',
		'p4_7',
		'p4_8',
		'p4_9',
		'p4_10',
		'p4_11',
		'p4_12',
		'p4_13',
		'p4_14',
		'p4_15',
		'p4_16',
		'p4_17',
		'p4_18',
		'p4_19',
		'p4_20',
		'p5_1',
		'p5_2',
		'p5_3',
		'p5_4',
		'p5_5',
		'p5_6',
		'p5_7',
		'p5_8',
		'p5_9',
		'p5_10',
		'p5_11',
		'p5_12',
		'p5_13',
		'p5_14',
		'p5_15',
		'p5_16',
		'p5_17',
		'p5_18',
		'p5_19',
		'p5_20',
		'p6_1',
		'p6_2',
		'p6_3',
		'p6_4',
		'p6_5',
		'p6_6',
		'p6_7',
		'p6_8',
		'p6_9',
		'p6_10',
		'p6_11',
		'p6_12',
		'p6_13',
		'p6_14',
		'p6_15',
		'p6_16',
		'p6_17',
		'p6_18',
		'p6_19',
		'p6_20',
		'p7',
		'p8',
		'p9',
		'p10',
		'p11',
		'p12',
		'p13',
		'p14',
		'p15',
		'p16',
		'p17',
		'p18',
		'p19a',
		'p19b',
		'p19c',
		'p19d',
		'p20',
		'p21',
		'p22',
		'p23',
		'p24',
		'p25',
		'p26',
		'p27a',
		'p27b',
		'p27c',
		'p27d',
		'p27e',
		'p27f',
		'p27g',
		'p27h',
		'p28',
		'p29',
		'p30',
		'p31',
		'p32',
		'p33',
		'p34',
		'p35',
		'p36a',
		'p36b',
		'p36c',
		'p36d',
		'p36e',
		'p36f',
		'p36g',
		'p36h',
		'p36i',
		'p36j',
		'p36k',
		'p36l',
		'p36m',
		'p36n',
		'p37',
		*/
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
)); ?>
