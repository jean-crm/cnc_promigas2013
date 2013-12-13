<div class="row-fluid">
    <?php
    /* @var $this RespuestasController */
    /* @var $model Respuestas */
    /* @var $form CActiveForm */
    ?>

    <div class="form">

        <?php $form=$this->beginWidget('JCActiveForm', array(
           'id'=>'respuestas-form',
           'enableAjaxValidation'=>false,
           'errorMessageCssClass' => 'alert alert-error',
           )); ?>

           <?php echo $form->errorSummary($model, NULL, NULL, array('class'=>'alert alert-error')); ?>
           <div class="control-group">
              <label class="checkbox">
                  <?php echo $form->checkBox($model, 'nosoyususario'); ?> No soy usuario de este servicio
              </label>
          </div>
          
          <div class="control-group">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <?php Obrero::printEscala1a10_7(); ?>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p1'); ?></td>
                        <?php echo $form->radioButtonList($model, 'p1', Obrero::getEscala1a5(), array('template' => '<td style="text-align: center; vertical-align: middle;"> {input} </td>', 'class' => 'inline','required'=>'required' )); ?>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="control-group">
            <label for="Respuestas_proyecto_innovacion">Qué proyecto de innovación en mejora del servicio le sugeriría usted a la dependencia <b><i><?php echo $contacto->unidad; ?></i></b></label>
            <?php echo $form->textArea($model,'proyecto_innovacion',array('rows'=>6,'maxlength'=>200, 'required'=>'required')); ?>
            <?php echo $form->error($model,'proyecto_innovacion'); ?>
        </div>

        <div class="control-group">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Siguiente' : 'Guardar', array('class' => 'btn')); ?>
        </div>

        <?php $this->endWidget(); ?>

    </div><!-- form -->
</div>
<script type="text/javascript">
$.validator.messages.required = 'Campo obligatorio';
$('form').validate();
$(function(){
    var servicio = "<?php echo $contacto->nom_servicio; ?>";
    var escala=new Array();
    escala[3]='Ni satisfecho ni insatisfecho';
    escala[2]='Insatisfecho';
    escala[1]='Muy insatisfecho';
    $('input[id^="Respuestas_p"]').on('click', function(event) {
        var valor=$(this).val();
        var tr=$(this).parent().parent().next('tr.razon');
        var labelTextArea=tr.children(':first');
        var textArea=tr.children().next('td').children();
        var atributo=$(this).parent().parent().children(':first').children('label');
        if(valor<4){
            tr.show();
            labelTextArea.html('Por qué dice usted que esta <i><b>'+ escala[valor]+'</b></i> con <i><b>'+atributo.html()+'</b></i> del  servicio <i><b>'+ servicio+'</b></i>');
        }else{
            tr.hide();
            textArea.val('');
        }
    });

    //control checkbox nosoyusuario
    $('#Respuestas_nosoyususario').on('click', function(event) {
        if($(this).is(':checked')){
            console.log('Chequeado');
            $(':radio').attr('disabled', true);
            $(':radio').attr('checked', false);
            $('textarea#Respuestas_proyecto_innovacion').attr('disabled', true);
            $('textarea#Respuestas_proyecto_innovacion').val('');
            $('textarea[id^="Respuestas_razon"]').parent().parent().hide();
            $('textarea[id^="Respuestas_razon"]').val('');
        }else{
            console.log('Deschequeado');
            $(':radio').attr('disabled', false);
            $('textarea#Respuestas_proyecto_innovacion').attr('disabled', false);
        }
    });
});
</script>