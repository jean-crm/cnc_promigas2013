<style type="text/css">
#p22_otro{
    display: none;
}
</style>
<div class="row-fluid">
    <?php
    /* @var $this ComunicacionesController */
    /* @var $model Comunicaciones */
    /* @var $form CActiveForm */
    ?>
<?php 
$user=User::model()->getUserActualModel();
$contacto=Contacto::model()->load4($user->nick);
 ?>
    <div class="form">

        <?php $form=$this->beginWidget('JCActiveForm', array(
           'id'=>'comunicaciones-form',
           'enableAjaxValidation'=>false,
           'errorMessageCssClass' => 'alert alert-error',
           )); ?>

           <p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

           <?php echo $form->errorSummary($model, NULL, NULL, array('class'=>'alert alert-error')); ?>
           <legend>Interactúa</legend>
           <div class="control-group">
            <?php echo $form->labelEx($model,'p1'); ?>
            <?php echo $form->dropDownList($model,'p1', Obrero::getEscalaSN(), array('empty'=>'Ninguno', 'required'=>'required')); ?>
            <?php echo $form->error($model,'p1'); ?>
        </div>
        <div id="grupo1">

            <div class="control-group">
                <?php echo $form->labelEx($model,'p2'); ?>
                <?php echo $form->dropDownList($model,'p2', Obrero::getFrecuenciaCom(), array('empty'=>'Ninguno', 'required'=>'required')); ?>
                <?php echo $form->error($model,'p2'); ?>
            </div>

            <div class="control-group">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <?php Obrero::printEscala1a5_7(); ?>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p3a'); ?></td>
                            <?php echo $form->radioButtonList($model, 'p3a', Obrero::getEscala1a5_2(), array('template' => '<td style="text-align: center; vertical-align: middle;"> {input} </td>', 'class' => 'inline','required'=>'required' )); ?>
                        </tr>
                        <tr>
                            <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p3b'); ?></td>
                            <?php echo $form->radioButtonList($model, 'p3b', Obrero::getEscala1a5_2(), array('template' => '<td style="text-align: center; vertical-align: middle;"> {input} </td>', 'class' => 'inline','required'=>'required' )); ?>
                        </tr>
                        <tr>
                            <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p3c'); ?></td>
                            <?php echo $form->radioButtonList($model, 'p3c', Obrero::getEscala1a5_2(), array('template' => '<td style="text-align: center; vertical-align: middle;"> {input} </td>', 'class' => 'inline','required'=>'required' )); ?>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="control-group">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <?php Obrero::printEscala1a3_4(); ?>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p4_1'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p4_1'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p5_1'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p6_1'); ?></td>
                        </tr>
                        <tr>
                            <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p4_2'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p4_2'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p5_2'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p6_2'); ?></td>
                        </tr>
                        <tr>
                            <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p4_3'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p4_3'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p5_3'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p6_3'); ?></td>
                        </tr>
                        <tr>
                            <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p4_4'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p4_4'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p5_4'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p6_4'); ?></td>
                        </tr>
                        <tr>
                            <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p4_5'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p4_5'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p5_5'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p6_5'); ?></td>
                        </tr>
                        <tr>
                            <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p4_6'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p4_6'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p5_6'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p6_6'); ?></td>
                        </tr>
                        <tr>
                            <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p4_7'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p4_7'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p5_7'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p6_7'); ?></td>
                        </tr>
                        <tr>
                            <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p4_8'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p4_8'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p5_8'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p6_8'); ?></td>
                        </tr>
                        <tr>
                            <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p4_9'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p4_9'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p5_9'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p6_9'); ?></td>
                        </tr>
                        <tr>
                            <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p4_10'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p4_10'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p5_10'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p6_10'); ?></td>
                        </tr>
                        <tr>
                            <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p4_11'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p4_11'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p5_11'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p6_11'); ?></td>
                        </tr>
                        <tr>
                            <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p4_12'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p4_12'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p5_12'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p6_12'); ?></td>
                        </tr>
                        <tr>
                            <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p4_13'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p4_13'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p5_13'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p6_13'); ?></td>
                        </tr>
                        <tr>
                            <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p4_14'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p4_14'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p5_14'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p6_14'); ?></td>
                        </tr>
                        <tr>
                            <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p4_15'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p4_15'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p5_15'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p6_15'); ?></td>
                        </tr>
                        <tr>
                            <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p4_16'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p4_16'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p5_16'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p6_16'); ?></td>
                        </tr>
                        <tr>
                            <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p4_17'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p4_17'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p5_17'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p6_17'); ?></td>
                        </tr>
                        <tr>
                            <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p4_18'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p4_18'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p5_18'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p6_18'); ?></td>
                        </tr>
                        <tr>
                            <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p4_19'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p4_19'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p5_19'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p6_19'); ?></td>
                        </tr>
                        <tr>
                            <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p4_20'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p4_20'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p5_20'); ?></td>
                            <td style="text-align:center;"><?php echo $form->checkBox($model,'p6_20'); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="control-group">
                <?php echo $form->labelEx($model,'p7'); ?>
                <?php echo $form->textArea($model,'p7',array('rows'=>6,'maxlength'=>300,'required'=>'required')); ?>
                <?php echo $form->error($model,'p7'); ?>
            </div>

            <div class="control-group">
                <?php echo $form->labelEx($model,'p8'); ?>
                <?php echo $form->textArea($model,'p8',array('rows'=>6,'maxlength'=>300,'required'=>'required')); ?>
                <?php echo $form->error($model,'p8'); ?>
            </div>
        </div>
        <legend>Prominotas</legend>

        <div class="control-group">
            <?php echo $form->labelEx($model,'p9'); ?>
            <?php echo $form->dropDownList($model,'p9', Obrero::getRevistaProminotas(), array('empty'=>'Ninguno','required'=>'required')); ?>
            <?php echo $form->error($model,'p9'); ?>
        </div>
        <div id="grupo2">    
            <div class="control-group">
                <?php echo $form->labelEx($model,'p10'); ?>
                <?php echo $form->dropDownList($model,'p10', Obrero::getEscalaSN(), array('empty'=>'Ninguno','required'=>'required')); ?>
                <?php echo $form->error($model,'p10'); ?>
            </div>

            <div class="control-group">
                <?php echo $form->labelEx($model,'p11'); ?>
                <?php echo $form->textArea($model,'p11',array('rows'=>6,'maxlength'=>300,'required'=>'required')); ?>
                <?php echo $form->error($model,'p11'); ?>
            </div>

            <div class="control-group">
                <?php echo $form->labelEx($model,'p12'); ?>
                <?php echo $form->textArea($model,'p12',array('rows'=>6,'maxlength'=>300,'required'=>'required')); ?>
                <?php echo $form->error($model,'p12'); ?>
            </div>

            <div class="control-group">
                <?php echo $form->labelEx($model,'p13'); ?>
                <?php echo $form->dropDownList($model,'p13', array('1'=>'Virtual', '2'=>'Impreso'), array('empty'=>'Ninguno','required'=>'required')); ?>
                <?php echo $form->error($model,'p13'); ?>
            </div>

            <div class="control-group">
                <?php echo $form->labelEx($model,'p14'); ?>
                <?php echo $form->textArea($model,'p14',array('rows'=>6,'maxlength'=>300,'required'=>'required')); ?>
                <?php echo $form->error($model,'p14'); ?>
            </div>
        </div>

        <div class="control-group">
            <?php echo $form->labelEx($model,'p15'); ?>
            <?php echo $form->dropDownList($model,'p15', Obrero::getEscalaSN(), array('empty'=>'Ninguno','required'=>'required')); ?>
            <?php echo $form->error($model,'p15'); ?>
        </div>

        <div class="control-group" id="p16">
            <?php echo $form->labelEx($model,'p16'); ?>
            <?php echo $form->textArea($model,'p16',array('rows'=>6,'maxlength'=>300,'required'=>'required')); ?>
            <?php echo $form->error($model,'p16'); ?>
        </div>
        <legend>Veracidad</legend>
        <div class="control-group">
            <?php echo $form->labelEx($model,'p17'); ?>
            <?php echo $form->dropDownList($model,'p17', Obrero::getEscalaSN(), array('empty'=>'Ninguno','required'=>'required')); ?>
            <?php echo $form->error($model,'p17'); ?>
        </div>

        <div class="control-group">
            <?php echo $form->labelEx($model,'p18'); ?>
            <?php echo $form->textArea($model,'p18',array('rows'=>6,'maxlength'=>300,'required'=>'required')); ?>
            <?php echo $form->error($model,'p18'); ?>
        </div>
        <div class="control-group">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <?php Obrero::printEscala1a2_n('19. Considera que la información publicada y difundida a través de los medios internos es:'); ?>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p19a'); ?></td>
                        <?php echo $form->radioButtonList($model, 'p19a', Obrero::getEscalaSN(), array('template' => '<td style="text-align: center; vertical-align: middle;"> {input} </td>', 'class' => 'inline','required'=>'required' )); ?>
                    </tr>
                    <tr>
                        <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p19b'); ?></td>
                        <?php echo $form->radioButtonList($model, 'p19b', Obrero::getEscalaSN(), array('template' => '<td style="text-align: center; vertical-align: middle;"> {input} </td>', 'class' => 'inline','required'=>'required' )); ?>
                    </tr>
                    <tr>
                        <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p19c'); ?></td>
                        <?php echo $form->radioButtonList($model, 'p19c', Obrero::getEscalaSN(), array('template' => '<td style="text-align: center; vertical-align: middle;"> {input} </td>', 'class' => 'inline','required'=>'required' )); ?>
                    </tr>
                    <tr>
                        <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p19d'); ?></td>
                        <?php echo $form->radioButtonList($model, 'p19d', Obrero::getEscalaSN(), array('template' => '<td style="text-align: center; vertical-align: middle;"> {input} </td>', 'class' => 'inline','required'=>'required' )); ?>
                    </tr>
                </tbody>
            </table>
        </div>
        <legend>Oportunidad</legend>

        <div class="control-group">
            <?php echo $form->labelEx($model,'p20'); ?>
            <?php echo $form->dropDownList($model,'p20', Obrero::getP20(), array('empty'=>'Ninguno','required'=>'required')); ?>
            <?php echo $form->error($model,'p20'); ?>
        </div>
        <legend>Grupos primarios</legend>

        <div class="control-group">
            <?php echo $form->labelEx($model,'p21'); ?>
            <?php echo $form->dropDownList($model,'p21', Obrero::getEscalaSN(), array('empty'=>'Ninguno','required'=>'required')); ?>
            <?php echo $form->error($model,'p21'); ?>
        </div>
        <div id="grupo3">
            <div class="control-group">
                <?php echo $form->labelEx($model,'p22'); ?>
                <?php echo $form->dropDownList($model,'p22', Obrero::getP22(), array('empty'=>'Ninguno','required'=>'required')); ?>
                <?php echo $form->error($model,'p22'); ?>
            </div>

            <div class="control-group" id="p22_otro">
                <?php echo $form->labelEx($model,'p22_otro'); ?>
                <?php echo $form->textArea($model,'p22_otro',array('rows'=>6,'maxlength'=>300,'required'=>'required')); ?>
                <?php echo $form->error($model,'p22_otro'); ?>
            </div>

            <div class="control-group">
                <?php echo $form->labelEx($model,'p23'); ?>
                <?php echo $form->dropDownList($model,'p23',Obrero::getEscalaSN(), array('empty'=>'Ninguno','required'=>'required')); ?>
                <?php echo $form->error($model,'p23'); ?>
            </div>

            <div class="control-group">
                <?php echo $form->labelEx($model,'p24'); ?>
                <?php echo $form->textArea($model,'p24',array('rows'=>6,'maxlength'=>300,'required'=>'required')); ?>
                <?php echo $form->error($model,'p24'); ?>
            </div>

            <div class="control-group">
                <?php echo $form->labelEx($model,'p25'); ?>
                <?php echo $form->dropDownList($model,'p25', Obrero::getEscalaSN(), array('empty'=>'Ninguno','required'=>'required')); ?>
                <?php echo $form->error($model,'p25'); ?>
            </div>

            <div class="control-group">
                <?php echo $form->labelEx($model,'p26'); ?>
                <?php echo $form->dropDownList($model,'p26', Obrero::getEscalaSN(), array('empty'=>'Ninguno','required'=>'required')); ?>
                <?php echo $form->error($model,'p26'); ?>
            </div>
            <div class="control-group">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <?php Obrero::printEscala1a2_n('27. Considera que los grupos primarios han contribuido a...'); ?>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p27a'); ?></td>
                            <?php echo $form->radioButtonList($model, 'p27a', Obrero::getEscalaSN(), array('template' => '<td style="text-align: center; vertical-align: middle;"> {input} </td>', 'class' => 'inline','required'=>'required' )); ?>
                        </tr>
                        <tr>
                            <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p27b'); ?></td>
                            <?php echo $form->radioButtonList($model, 'p27b', Obrero::getEscalaSN(), array('template' => '<td style="text-align: center; vertical-align: middle;"> {input} </td>', 'class' => 'inline','required'=>'required' )); ?>
                        </tr>
                        <tr>
                            <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p27c'); ?></td>
                            <?php echo $form->radioButtonList($model, 'p27c', Obrero::getEscalaSN(), array('template' => '<td style="text-align: center; vertical-align: middle;"> {input} </td>', 'class' => 'inline','required'=>'required' )); ?>
                        </tr>
                        <tr>
                            <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p27d'); ?></td>
                            <?php echo $form->radioButtonList($model, 'p27d', Obrero::getEscalaSN(), array('template' => '<td style="text-align: center; vertical-align: middle;"> {input} </td>', 'class' => 'inline','required'=>'required' )); ?>
                        </tr>
                        <tr>
                            <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p27e'); ?></td>
                            <?php echo $form->radioButtonList($model, 'p27e', Obrero::getEscalaSN(), array('template' => '<td style="text-align: center; vertical-align: middle;"> {input} </td>', 'class' => 'inline','required'=>'required' )); ?>
                        </tr>
                        <tr>
                            <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p27f'); ?></td>
                            <?php echo $form->radioButtonList($model, 'p27f', Obrero::getEscalaSN(), array('template' => '<td style="text-align: center; vertical-align: middle;"> {input} </td>', 'class' => 'inline','required'=>'required' )); ?>
                        </tr>
                        <tr>
                            <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p27g'); ?></td>
                            <?php echo $form->radioButtonList($model, 'p27g', Obrero::getEscalaSN(), array('template' => '<td style="text-align: center; vertical-align: middle;"> {input} </td>', 'class' => 'inline','required'=>'required' )); ?>
                        </tr>
                        <tr>
                            <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p27h'); ?></td>
                            <?php echo $form->radioButtonList($model, 'p27h', Obrero::getEscalaSN(), array('template' => '<td style="text-align: center; vertical-align: middle;"> {input} </td>', 'class' => 'inline','required'=>'required' )); ?>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="control-group">
                <?php echo $form->labelEx($model,'p28'); ?>
                <?php echo $form->dropDownList($model,'p28', Obrero::getEscalaSN(), array('empty'=>'Ninguno','required'=>'required')); ?>
                <?php echo $form->error($model,'p28'); ?>
            </div>

            <div class="control-group" id="p29">
                <?php echo $form->labelEx($model,'p29'); ?>
                <?php echo $form->textArea($model,'p29',array('rows'=>6,'maxlength'=>300,'required'=>'required')); ?>
                <?php echo $form->error($model,'p29'); ?>
            </div>

            <div class="control-group">
                <?php echo $form->labelEx($model,'p30'); ?>
                <?php echo $form->textArea($model,'p30',array('rows'=>6,'maxlength'=>300,'required'=>'required')); ?>
                <?php echo $form->error($model,'p30'); ?>
            </div>

            <div class="control-group">
                <?php echo $form->labelEx($model,'p31'); ?>
                <?php echo $form->textArea($model,'p31',array('rows'=>6,'maxlength'=>300,'required'=>'required')); ?>
                <?php echo $form->error($model,'p31'); ?>
            </div>

            <div class="control-group">
                <?php echo $form->labelEx($model,'p32'); ?>
                <?php echo $form->textArea($model,'p32',array('rows'=>6,'maxlength'=>300,'required'=>'required')); ?>
                <?php echo $form->error($model,'p32'); ?>
            </div>

            <div class="control-group" id="p33">
                <?php echo $form->labelEx($model,'p33'); ?>
                <?php echo $form->dropDownList($model,'p33', Obrero::getEscalaSN(), array('empty'=>'Ninguno','required'=>'required')); ?>
                <?php echo $form->error($model,'p33'); ?>
            </div>

            <div class="control-group" id="p34">
                <?php echo $form->labelEx($model,'p34'); ?>
                <?php echo $form->dropDownList($model,'p34', Obrero::getEscalaSN(), array('empty'=>'Ninguno','required'=>'required')); ?>
                <?php echo $form->error($model,'p34'); ?>
            </div>
            <div id="grupo4">


                <div class="control-group" id="p35">
                    <?php echo $form->labelEx($model,'p35'); ?>
                    <?php echo $form->textArea($model,'p35', array('rows'=>6,'maxlength'=>300,'required'=>'required')); ?>
                    <?php echo $form->error($model,'p35'); ?>
                </div>

                <div class="control-group" id="p36">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <td>36. Al elaborar la agenda de las reuniones de su grupo primario, Cuáles de los siguientes temas tiene en cuenta</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p36a'); ?></td>
                                <td style="text-align:center;"><?php echo $form->checkBox($model,'p36a'); ?></td>
                            </tr>
                            <tr>
                                <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p36b'); ?></td>
                                <td style="text-align:center;"><?php echo $form->checkBox($model,'p36b'); ?></td>
                            </tr>
                            <tr>
                                <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p36c'); ?></td>
                                <td style="text-align:center;"><?php echo $form->checkBox($model,'p36c'); ?></td>
                            </tr>
                            <tr>
                                <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p36d'); ?></td>
                                <td style="text-align:center;"><?php echo $form->checkBox($model,'p36d'); ?></td>
                            </tr>
                            <tr>
                                <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p36e'); ?></td>
                                <td style="text-align:center;"><?php echo $form->checkBox($model,'p36e'); ?></td>
                            </tr>
                            <tr>
                                <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p36f'); ?></td>
                                <td style="text-align:center;"><?php echo $form->checkBox($model,'p36f'); ?></td>
                            </tr>
                            <tr>
                                <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p36g'); ?></td>
                                <td style="text-align:center;"><?php echo $form->checkBox($model,'p36g'); ?></td>
                            </tr>
                            <tr>
                                <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p36h'); ?></td>
                                <td style="text-align:center;"><?php echo $form->checkBox($model,'p36h'); ?></td>
                            </tr>

                            <tr>
                                <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p36i'); ?></td>
                                <td style="text-align:center;"><?php echo $form->checkBox($model,'p36i'); ?></td>
                            </tr>
                            <tr>
                                <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p36j'); ?></td>
                                <td style="text-align:center;"><?php echo $form->checkBox($model,'p36j'); ?></td>
                            </tr>
                            <tr>
                                <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p36k'); ?></td>
                                <td style="text-align:center;"><?php echo $form->checkBox($model,'p36k'); ?></td>
                            </tr>
                            <tr>
                                <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p36l'); ?></td>
                                <td style="text-align:center;"><?php echo $form->checkBox($model,'p36l'); ?></td>
                            </tr>
                            <tr>
                                <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p36m'); ?></td>
                                <td style="text-align:center;"><?php echo $form->checkBox($model,'p36m'); ?></td>
                            </tr>
                            <tr>
                                <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p36n'); ?></td>
                                <td style="text-align:center;"><?php echo $form->checkBox($model,'p36n'); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="control-group">
                <?php echo $form->labelEx($model,'p37'); ?>
                <?php echo $form->textArea($model,'p37',array('rows'=>6,'maxlength'=>300,'required'=>'required')); ?>
                <?php echo $form->error($model,'p37'); ?>
            </div>
        </div>
        <div class="control-group">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Siguiente' : 'Guardar', array('class' => 'btn')); ?>
        </div>

        <?php $this->endWidget(); ?>

    </div><!-- form -->
</div>
<script type="text/javascript">
$(function(){
    $.validator.messages.required = 'Campo obligatorio';
    $('form').validate();
    $('#Comunicaciones_p9').change(function(event) {
        var valor= $(this).val();
        if(valor!=4){
            $('#grupo2').slideDown('fast');
        }else{
            $('#grupo2').slideUp('fast');
            $('textarea#Comunicaciones_p11,textarea#Comunicaciones_p12,textarea#Comunicaciones_p14').val('');
            $("select#Comunicaciones_p10 option[value=''],select#Comunicaciones_p13 option[value='']").prop('selected', true);
        }
        console.log(valor);
    });
    $('#Comunicaciones_p22').change(function(event) {
       var valor=$(this).val();
       if(valor==4){
        $('#p22_otro').slideDown('fast');
    }else{
        $('#p22_otro').slideUp('fast');
        $('textarea#Comunicaciones_p22_otro').val('');
    }
});
    $('#Comunicaciones_p1').change(function(event) {
       var valor=$(this).val();
       if(valor==1){
        $('#grupo1').slideDown('fast');
    }else{
        $('#grupo1').slideUp('fast');
        $("select#Comunicaciones_p2 option[value='']").prop('selected', true);
        $(':radio[id^="Comunicaciones_p3"]').prop('checked', false);
        $(':checkbox[id^="Comunicaciones_p4"],:checkbox[id^="Comunicaciones_p5"],:checkbox[id^="Comunicaciones_p6"]').prop('checked', false);
        $('textarea#Comunicaciones_p7,textarea#Comunicaciones_p8').val('');
    }
});
    $('#Comunicaciones_p15').change(function(event) {
        var valor=$(this).val();
        if(valor==2){
            $('#p16').slideUp('fast');
        }else{
            $('#p16').slideDown('fast');
            $('textarea#Comunicaciones_p16').val('');
        }
    });
    $('#Comunicaciones_p21').change(function(event) {
        var valor=$(this).val();
        if(valor==2){
            $('#grupo3').slideUp('fast');
            $(':radio[id^="Comunicaciones_p27"]').prop('checked', false);
            $(':checkbox[id^="Comunicaciones_p36"]').prop('checked', false);
            $("select#Comunicaciones_p22 option[value=''],select#Comunicaciones_p23 option[value=''],select#Comunicaciones_p25 option[value=''],select#Comunicaciones_p26 option[value=''],select#Comunicaciones_p28 option[value=''],select#Comunicaciones_p33 option[value=''],select#Comunicaciones_p34 option[value='']").prop('selected', true);
            $('textarea#Comunicaciones_p24,textarea#Comunicaciones_p29,textarea#Comunicaciones_p30,textarea#Comunicaciones_p31,textarea#Comunicaciones_p32,textarea#Comunicaciones_p35,textarea#Comunicaciones_p37').val('');
        }else{
            $('#grupo3').slideDown('fast');
        }
    });
    $('#Comunicaciones_p28').change(function(event) {
       var valor=$(this).val();
       if(valor==1){
        $('#p29').slideDown('fast');
    }else{
        $('#p29').slideUp('fast');
        $('textarea#Comunicaciones_p29').val('');
    }
});
    $('#Comunicaciones_p34').change(function(event) {
       if($(this).val()==1){
        $('#grupo4').slideDown('fast');
       }else{
        $('#grupo4').slideUp('fast');
        $('textarea#Comunicaciones_p35').val('');
        $(':checkbox[id^="Comunicaciones_p36"]').prop('checked', false);
       }
    });

    //preguntas de lider
    var lider = '<?php echo $contacto->lider; ?>';
    if(lider=='Si'){
        $('#p34,#p35,#p33,#p36').show();
    }else{
        $('#p34,#p35,#p33,#p36').hide();
    }
});
</script>