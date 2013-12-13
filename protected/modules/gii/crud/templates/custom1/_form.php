<div class="row-fluid">
    <?php
    /**
     * The following variables are available in this template:
     * - $this: the CrudCode object
     */
    ?>
    <?php echo "<?php\n"; ?>
    /* @var $this <?php echo $this->getControllerClass(); ?> */
    /* @var $model <?php echo $this->getModelClass(); ?> */
    /* @var $form CActiveForm */
    ?>

    <div class="form">

        <?php echo "<?php \$form=\$this->beginWidget('CActiveForm', array(
	'id'=>'" . $this->class2id($this->modelClass) . "-form',
	'enableAjaxValidation'=>false,
        'errorMessageCssClass' => 'alert alert-error',
)); ?>\n"; ?>

        <p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

        <?php echo "<?php echo \$form->errorSummary(\$model, NULL, NULL, array('class'=>'alert alert-error')); ?>\n"; ?>

        <?php
        foreach ($this->tableSchema->columns as $column) {
            if ($column->autoIncrement)
                continue;
            ?>
            <div class="control-group">
                <?php echo "<?php echo " . $this->generateActiveLabel($this->modelClass, $column) . "; ?>\n"; ?>
                <?php echo "<?php echo " . $this->generateActiveField($this->modelClass, $column) . "; ?>\n"; ?>
                <?php echo "<?php echo \$form->error(\$model,'{$column->name}'); ?>\n"; ?>
            </div>

            <?php
        }
        ?>
        <div class="control-group">
            <?php echo "<?php echo CHtml::submitButton(\$model->isNewRecord ? 'Crear' : 'Guardar', array('class' => 'btn')); ?>\n"; ?>
        </div>

        <?php echo "<?php \$this->endWidget(); ?>\n"; ?>

    </div><!-- form -->
</div>