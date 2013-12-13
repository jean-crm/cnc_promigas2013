<?php
$this->breadcrumbs = array(
    'Jererquías de permisos',
);

$this->menu = array(
    array('label' => '<i class="icon-plus-sign"></i> Crear', 'url' => array('create')),
    array('label' => '<i class="icon-list-alt"></i> Reporte', 'url' => array('admin')),
);
?>
<h1>Jererquías de permisos</h1>
<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>
<script src="<?php echo Yii::app()->baseUrl; ?>/assets/twitter-bootstrap/js/bootstrap-tooltip.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/assets/twitter-bootstrap/js/bootstrap-popover.js" type="text/javascript"></script>
<script>
    $(function ()
    { $(".ttp").tooltip();
    });
</script>
