<?php
/* @var $this AuthitemController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Ítems de autorización',
);

$this->menu = array(
    array('label' => '<i class="icon-plus-sign"></i> Crear', 'url' => array('create')),
    array('label' => '<i class="icon-list-alt"></i> Reporte', 'url' => array('admin')),
);
?>

<h1>Ítems de autorización</h1>
<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>
