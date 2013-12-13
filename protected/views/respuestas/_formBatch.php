<div class="row-fluid">
    <?php
    /* @var $this RespuestasController */
    /* @var $item Respuestas */
    /* @var $form CActiveForm */
    ?>
    <div class="form">

        <div class="form">
            <?php echo CHtml::beginForm(); ?>
            <legend>
                <span style="font-weight: bold;text-transform: uppercase;">Unidad: <?php echo $models[0]->_contacto->unidad; ?></span>
            </legend>
            <div class="hero-unit" style="padding: 10px 60px;">
                <p class="text-center">EVALUACIÓN DE SERVICIO</p>
                <p class="text-center">PERIODO  A EVALUAR: ENERO A DICIEMBRE DE 2013</p>
            </div>
            <div class="alert">
                <p>A continuación encontrará la encuesta de satisfacción a diligenciar, donde aparecen únicamente los servicios de los cuales usted es usuario. </p>
                <p>Para cada uno de los servicios evaluará los siguientes atributos en el marco de la cultura de servicio de PROMIGAS</p>
                <p><span class="label label-warning">CUMPLIMIENTO:</span> Entregar el servicio en el tiempo establecido, o acordado previamente con el cliente mediante los acuerdos de servicio. (El cumplimiento de las especificaciones se evalúa en el atributo de CALIDAD)</p>
                <p><span class="label label-warning">COMUNICACIÓN:</span> Mantener una interacción fluida y clara con el cliente durante la prestación del servicio, y después, si se requiere, informar oportunamente al cliente de cambios o novedades durante la atención del servicio.</p> 
                <p><span class="label label-warning">CALIDAD:</span> Prestar un servicio cuyas características cumplan con los requisitos y especificaciones acordadas, mediante la optimización de recursos  y por lo tanto, alcanzando una alta efectividad del mismo.</p>  
                <p><span class="label label-warning">ACTITUD DE SERVICIO:</span> Demostrar evidente interés por conocer y satisfacer las necesidades del cliente y tener la voluntad de prestar una adecuada atención, acompañada de  un trato amable y de respeto.</p>
            </div>
            <div class="alert">
                <p>Le agradecemos tener en cuenta las siguientes recomendaciones:</p>
                <ul>
                    <li>En caso de presentar alguna inquietud con relación al servicio a evaluar, usted puede acceder a la descripción del servicio pasando el mouse por encima del nombre del mismo</li>
                    <li>Si usted calificó algún atributo con las escalas Ni Satisfecho/Ni Insatisfecho, Insatisfecho y Muy Insatisfecho, es muy importante que coloque en el espacio respectivo la justificación de esta calificación, para darle a su proveedor interno detalles de la oportunidad de mejora</li>
                    <li>Si le aparece algún servicio del cual usted no es cliente, por favor no lo evalúe, señale la opción que dice “No Aplica”</li>
                    <li>Si usted necesita interrumpir el diligenciamiento de la encuesta por motivos externos, puede hacerlo, solo termine de calificar los servicios de la página activa, presione Enviar y cierre la página. (Al presionar Enviar automáticamente la información queda grabada.). Cuando vuelva a ingresar, le aparecerá el siguiente servicio a calificar.</li>
                </ul>
            </div>

            <div class="alert">
                <p>Cuando termine de diligenciar completamente la encuesta aparecerá la siguiente frase <b><i>“Nuevamente quiero agradecerle su colaboración a nombre del Centro Nacional de Consultoría. Estamos seguros que sus respuestas ayudarán a mejorar los productos y servicios que recibe.”</i></b></p>
                <p>Agradecemos su colaboración en responder la encuesta.  La información que nos suministre será tratada bajo la más estricta confidencialidad.</p>
            </div>

            <?php foreach($models as $i=>$item): ?> 
            <span id="<?php echo $i; ?>" servicio="<?php echo $item->_contacto->nom_servicio; ?>"></span>
            <div class="control-group">
              <label class="checkbox">
                <?php echo Chtml::activeCheckBox($item, "[$i]nosoyususario", array('i'=>"$i")); ?> No soy usuario de este servicio
            </label>
        </div>
        <div class="control-group" id="<?php echo 'servicio'.$i; ?>">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <?php Obrero::printEscala1a5_n('Qué tan satisfecho está con el servicio <a href="#" title="'.$item->_contacto->descripcion_servicio.'">'.$item->_contacto->nom_servicio.'</a> en cuanto a…?'); ?>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="width: 50%; background-color: #eeeeee; "><?php echo CHtml::activeLabelEx($item,'p1'); ?></td>
                        <?php echo JCHtml::activeRadioButtonList($item,"[$i]p1", Obrero::getEscala1a5(), array('template' => '<td style="text-align: center; vertical-align: middle;"> {input} </td>', 'class' => 'inline','required'=>'required', 'i'=>"$i" )); ?>
                    </tr>
                    <tr style="display:none;" class="razon" i="<?php echo $i; ?>">
                        <td style="vertical-align:middle;"></td>
                        <td colspan="6" style="text-align:center;">
                            <?php echo CHtml::activeTextArea($item,"[$i]razonp1",array('rows'=>6,'maxlength'=>200, 'required'=>'required', 'i'=>"razonp$i")); ?>
                        </td>
                    </tr>
                    <tr style="display:none;" class="razon2" i="<?php echo $i; ?>" 'servicio'="<?php echo $item->_contacto->nom_servicio; ?>">
                        <td style="vertical-align:middle;"> del servicio<i><b> <?php echo $item->_contacto->nom_servicio; ?></b></i></td>
                        <td colspan="6" style="text-align:center;">
                            <?php echo CHtml::activeTextArea($item,"[$i]razon2p1",array('rows'=>6,'maxlength'=>200, 'required'=>'required', 'i'=>"razon2p$i")); ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 50%; background-color: #eeeeee; " 'servicio'="<?php echo $item->_contacto->nom_servicio; ?>"><?php echo CHtml::activeLabelEx($item, 'p2'); ?></td>
                        <?php echo JCHtml::activeRadioButtonList($item, "[$i]p2", Obrero::getEscala1a5(), array('template' => '<td style="text-align: center; vertical-align: middle;"> {input} </td>', 'class' => 'inline', 'required'=>'required', 'i'=>"$i")); ?>
                    </tr>
                    <tr style="display:none;" class="razon" i="<?php echo $i; ?>" 'servicio'="<?php echo $item->_contacto->nom_servicio; ?>">
                        <td style="vertical-align:middle;"> del servicio<i><b> <?php echo $item->_contacto->nom_servicio; ?></b></i></td>
                        <td colspan="6" style="text-align:center;">
                            <?php echo CHtml::activeTextArea($item,"[$i]razonp2",array('rows'=>6,'maxlength'=>200, 'required'=>'required', 'i'=>"razonp$i")); ?>
                        </td>
                    </tr>
                    <tr style="display:none;" class="razon2" i="<?php echo $i; ?>" 'servicio'="<?php echo $item->_contacto->nom_servicio; ?>">
                        <td style="vertical-align:middle;"> del servicio<i><b> <?php echo $item->_contacto->nom_servicio; ?></b></i></td>
                        <td colspan="6" style="text-align:center;">
                            <?php echo CHtml::activeTextArea($item,"[$i]razon2p2",array('rows'=>6,'maxlength'=>200, 'required'=>'required', 'i'=>"razon2p$i")); ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 50%; background-color: #eeeeee; "><?php echo CHtml::activeLabelEx($item, 'p3'); ?></td>
                        <?php echo JCHtml::activeRadioButtonList($item, "[$i]p3", Obrero::getEscala1a5(), array('template' => '<td style="text-align: center; vertical-align: middle;"> {input} </td>', 'class' => 'inline', 'required'=>'required', 'i'=>"$i")); ?>
                    </tr>
                    <tr style="display:none;" class="razon" i="<?php echo $i; ?>">
                        <td style="vertical-align:middle;"> del servicio<i><b> <?php echo $item->_contacto->nom_servicio; ?></b></i></td>
                        <td colspan="6" style="text-align:center;">
                            <?php echo CHtml::activeTextArea($item,"[$i]razonp3",array('rows'=>6,'maxlength'=>200, 'required'=>'required', 'i'=>"razonp$i")); ?>
                        </td>
                    </tr>
                    <tr style="display:none;" class="razon2" i="<?php echo $i; ?>">
                        <td style="vertical-align:middle;"> del servicio<i><b> <?php echo $item->_contacto->nom_servicio; ?></b></i></td>
                        <td colspan="6" style="text-align:center;">
                            <?php echo CHtml::activeTextArea($item,"[$i]razon2p3",array('rows'=>6,'maxlength'=>200, 'required'=>'required', 'i'=>"razon2p$i")); ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 50%; background-color: #eeeeee; "><?php echo CHtml::activeLabelEx($item, 'p4'); ?></td>
                        <?php echo JCHtml::activeRadioButtonList($item, "[$i]p4", Obrero::getEscala1a5(), array('template' => '<td style="text-align: center; vertical-align: middle;"> {input} </td>', 'class' => 'inline', 'required'=>'required', 'i'=>"$i")); ?>
                    </tr>
                    <tr style="display:none;" class="razon" i="<?php echo $i; ?>">
                        <td style="vertical-align:middle;"> del servicio<i><b> <?php echo $item->_contacto->nom_servicio; ?></b></i></td>
                        <td colspan="6" style="text-align:center;">
                            <?php echo CHtml::activeTextArea($item,"[$i]razonp4",array('rows'=>6,'maxlength'=>200, 'required'=>'required', 'i'=>"razonp1$i")); ?>
                        </td>
                    </tr>
                    <tr style="display:none;" class="razon2" i="<?php echo $i; ?>">
                        <td style="vertical-align:middle;"> del servicio<i><b> <?php echo $item->_contacto->nom_servicio; ?></b></i></td>
                        <td colspan="6" style="text-align:center;">
                            <?php echo CHtml::activeTextArea($item,"[$i]razon2p4",array('rows'=>6,'maxlength'=>200, 'required'=>'required', 'i'=>"razon2p$i")); ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <hr/>
    <?php endforeach; ?>

    <?php echo CHtml::submitButton('Siguiente', array('class' => 'btn')); ?>
    <?php echo CHtml::endForm(); ?>
</div><!-- form -->

</div><!-- form -->
</div>
<script type="text/javascript">
$.validator.messages.required = 'Campo obligatorio';
$('form').validate();
$(function(){
    var servicio = "<?php echo $item->_contacto->nom_servicio; ?>";
    var escala=new Array();
    escala[3]='Ni satisfecho ni insatisfecho';
    escala[2]='Insatisfecho';
    escala[1]='Muy insatisfecho';
    $(':radio').on('click', function(event) {
        var valor=$(this).val();
        var tr=$(this).parent().parent();
        var atributo=$(this).parent().parent().children(':first').children('label');
        var i=$(this).attr('i');
        var servicio = $('span[id="'+i+'"]').attr('servicio');
        if(valor<4){
            tr=tr.next('tr.razon');
            tr.show();
            var labelTextArea=tr.children(':first');
            labelTextArea.html('Por qué dice usted que esta <i><b>'+ escala[valor]+'</b></i> con <i><b>'+atributo.html()+'</b></i> del servicio <i><b>'+servicio+'</i></b>');
        }else{
            tr=tr.next('tr.razon').hide();
            var textArea=tr.children().next('td').children();
            textArea.val('');
        }
        if(valor==4){
            tr=tr.next('tr.razon2').show();
            var labelTextArea=tr.children(':first');
            var labelHtml=labelTextArea.html();
            labelTextArea.html(' Qué hace falta para que usted este muy satisfecho con <i><b>'+atributo.html()+'</b></i> del servicio <i><b>'+servicio+'</i></b>');
        }else{
            tr=tr.next('tr.razon2').hide();
            var textArea=tr.children().next('td').children();
            textArea.val('');
        }
    });

    //control checkbox nosoyusuario
    $(':checkbox').on('click', function(event) {
        var i=$(this).attr('i');
        if($(this).is(':checked')){
            //console.log('Chequeado');
            $(':radio[i="'+i+'"]').attr('disabled', true);
            $(':radio[i="'+i+'"]').attr('checked', false);
            $('textarea[i$="'+i+'"]').val('');
            $('tr[i="'+i+'"]').hide();
            $('div#servicio'+i).hide();
        }else{
            //console.log('Deschequeado');
            $('div#servicio'+i).show();
            $(':radio').attr('disabled', false);
            // $('textarea[i$="'+i+'"]').attr('disabled', false);
        }
    });
});
</script>