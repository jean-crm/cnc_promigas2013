<div class="view">
    <b><?php
echo CHtml::link(null, array('#'), array(
    'class' => 'icon-edit pull-right ttp',
    'data-toggle' => "tooltip",
    'data-original-title' => "Detalles",
    'submit' => array('view', 'itemname' => $data->itemname, 'userid' => $data->userid),));
?></b>
    <b><?php
        echo CHtml::link(null, array('#'), array(
            'class' => 'icon-trash pull-right ttp',
            'data-toggle' => "tooltip",
            'data-original-title' => "Eliminar",
            'submit' => array('delete', 'itemname' => $data->itemname, 'userid' => $data->userid),
            'confirm' => '¿Está seguro de eliminar éste ítem?')
        );
?></b>
    <b><?php echo CHtml::encode($data->getAttributeLabel('itemname')); ?>:</b>
    <?php echo CHtml::encode($data->itemname); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('userid')); ?>:</b>
    <?php echo CHtml::encode(User::model()->getUserByNick($data->userid)); ?>
    <br />

</div>