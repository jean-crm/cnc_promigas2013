<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<?php
$this->beginWidget('zii.widgets.CPortlet', array(
    'htmlOptions' => array(
        'class' => 'navbar-inner',
    ),
    'contentCssClass' => 'navbar'
));
?>

<?php
$this->widget('zii.widgets.CMenu', array(
    'encodeLabel' => false,
    'items' => $this->menu,
    'htmlOptions' => array('class' => 'nav', 'style' => "display: block; position: static; margin-bottom: 5px; *width: 180px;", 'aria-labelledby' => "dropdownMenu", 'role' => "menu"),
//                'htmlOptions' => array('class' => 'dropdown-menu', 'role' => "menu", 'aria-labelledby' => "dropdownMenu"),
));
?>
<?php
$this->endWidget();
?>
<div class="row-fluid">
    <div class="span12">
        <div id="content">
            <?php echo $content; ?>
        </div><!-- content -->
    </div>
</div>
<?php $this->endContent(); ?>