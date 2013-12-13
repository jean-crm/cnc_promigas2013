<?php
/* @var $this ComunicacionesController */
/* @var $data Comunicaciones */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_empleado')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_empleado), array('view', 'id'=>$data->cod_empleado)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p1')); ?>:</b>
	<?php echo CHtml::encode($data->p1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p2')); ?>:</b>
	<?php echo CHtml::encode($data->p2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p3a')); ?>:</b>
	<?php echo CHtml::encode($data->p3a); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p3b')); ?>:</b>
	<?php echo CHtml::encode($data->p3b); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p3c')); ?>:</b>
	<?php echo CHtml::encode($data->p3c); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p4_1')); ?>:</b>
	<?php echo CHtml::encode($data->p4_1); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('p4_2')); ?>:</b>
	<?php echo CHtml::encode($data->p4_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p4_3')); ?>:</b>
	<?php echo CHtml::encode($data->p4_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p4_4')); ?>:</b>
	<?php echo CHtml::encode($data->p4_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p4_5')); ?>:</b>
	<?php echo CHtml::encode($data->p4_5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p4_6')); ?>:</b>
	<?php echo CHtml::encode($data->p4_6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p4_7')); ?>:</b>
	<?php echo CHtml::encode($data->p4_7); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p4_8')); ?>:</b>
	<?php echo CHtml::encode($data->p4_8); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p4_9')); ?>:</b>
	<?php echo CHtml::encode($data->p4_9); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p4_10')); ?>:</b>
	<?php echo CHtml::encode($data->p4_10); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p4_11')); ?>:</b>
	<?php echo CHtml::encode($data->p4_11); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p4_12')); ?>:</b>
	<?php echo CHtml::encode($data->p4_12); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p4_13')); ?>:</b>
	<?php echo CHtml::encode($data->p4_13); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p4_14')); ?>:</b>
	<?php echo CHtml::encode($data->p4_14); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p4_15')); ?>:</b>
	<?php echo CHtml::encode($data->p4_15); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p4_16')); ?>:</b>
	<?php echo CHtml::encode($data->p4_16); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p4_17')); ?>:</b>
	<?php echo CHtml::encode($data->p4_17); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p4_18')); ?>:</b>
	<?php echo CHtml::encode($data->p4_18); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p4_19')); ?>:</b>
	<?php echo CHtml::encode($data->p4_19); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p4_20')); ?>:</b>
	<?php echo CHtml::encode($data->p4_20); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p5_1')); ?>:</b>
	<?php echo CHtml::encode($data->p5_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p5_2')); ?>:</b>
	<?php echo CHtml::encode($data->p5_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p5_3')); ?>:</b>
	<?php echo CHtml::encode($data->p5_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p5_4')); ?>:</b>
	<?php echo CHtml::encode($data->p5_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p5_5')); ?>:</b>
	<?php echo CHtml::encode($data->p5_5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p5_6')); ?>:</b>
	<?php echo CHtml::encode($data->p5_6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p5_7')); ?>:</b>
	<?php echo CHtml::encode($data->p5_7); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p5_8')); ?>:</b>
	<?php echo CHtml::encode($data->p5_8); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p5_9')); ?>:</b>
	<?php echo CHtml::encode($data->p5_9); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p5_10')); ?>:</b>
	<?php echo CHtml::encode($data->p5_10); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p5_11')); ?>:</b>
	<?php echo CHtml::encode($data->p5_11); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p5_12')); ?>:</b>
	<?php echo CHtml::encode($data->p5_12); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p5_13')); ?>:</b>
	<?php echo CHtml::encode($data->p5_13); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p5_14')); ?>:</b>
	<?php echo CHtml::encode($data->p5_14); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p5_15')); ?>:</b>
	<?php echo CHtml::encode($data->p5_15); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p5_16')); ?>:</b>
	<?php echo CHtml::encode($data->p5_16); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p5_17')); ?>:</b>
	<?php echo CHtml::encode($data->p5_17); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p5_18')); ?>:</b>
	<?php echo CHtml::encode($data->p5_18); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p5_19')); ?>:</b>
	<?php echo CHtml::encode($data->p5_19); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p5_20')); ?>:</b>
	<?php echo CHtml::encode($data->p5_20); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p6_1')); ?>:</b>
	<?php echo CHtml::encode($data->p6_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p6_2')); ?>:</b>
	<?php echo CHtml::encode($data->p6_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p6_3')); ?>:</b>
	<?php echo CHtml::encode($data->p6_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p6_4')); ?>:</b>
	<?php echo CHtml::encode($data->p6_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p6_5')); ?>:</b>
	<?php echo CHtml::encode($data->p6_5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p6_6')); ?>:</b>
	<?php echo CHtml::encode($data->p6_6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p6_7')); ?>:</b>
	<?php echo CHtml::encode($data->p6_7); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p6_8')); ?>:</b>
	<?php echo CHtml::encode($data->p6_8); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p6_9')); ?>:</b>
	<?php echo CHtml::encode($data->p6_9); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p6_10')); ?>:</b>
	<?php echo CHtml::encode($data->p6_10); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p6_11')); ?>:</b>
	<?php echo CHtml::encode($data->p6_11); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p6_12')); ?>:</b>
	<?php echo CHtml::encode($data->p6_12); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p6_13')); ?>:</b>
	<?php echo CHtml::encode($data->p6_13); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p6_14')); ?>:</b>
	<?php echo CHtml::encode($data->p6_14); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p6_15')); ?>:</b>
	<?php echo CHtml::encode($data->p6_15); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p6_16')); ?>:</b>
	<?php echo CHtml::encode($data->p6_16); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p6_17')); ?>:</b>
	<?php echo CHtml::encode($data->p6_17); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p6_18')); ?>:</b>
	<?php echo CHtml::encode($data->p6_18); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p6_19')); ?>:</b>
	<?php echo CHtml::encode($data->p6_19); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p6_20')); ?>:</b>
	<?php echo CHtml::encode($data->p6_20); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p7')); ?>:</b>
	<?php echo CHtml::encode($data->p7); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p8')); ?>:</b>
	<?php echo CHtml::encode($data->p8); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p9')); ?>:</b>
	<?php echo CHtml::encode($data->p9); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p10')); ?>:</b>
	<?php echo CHtml::encode($data->p10); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p11')); ?>:</b>
	<?php echo CHtml::encode($data->p11); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p12')); ?>:</b>
	<?php echo CHtml::encode($data->p12); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p13')); ?>:</b>
	<?php echo CHtml::encode($data->p13); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p14')); ?>:</b>
	<?php echo CHtml::encode($data->p14); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p15')); ?>:</b>
	<?php echo CHtml::encode($data->p15); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p16')); ?>:</b>
	<?php echo CHtml::encode($data->p16); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p17')); ?>:</b>
	<?php echo CHtml::encode($data->p17); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p18')); ?>:</b>
	<?php echo CHtml::encode($data->p18); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p19a')); ?>:</b>
	<?php echo CHtml::encode($data->p19a); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p19b')); ?>:</b>
	<?php echo CHtml::encode($data->p19b); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p19c')); ?>:</b>
	<?php echo CHtml::encode($data->p19c); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p19d')); ?>:</b>
	<?php echo CHtml::encode($data->p19d); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p20')); ?>:</b>
	<?php echo CHtml::encode($data->p20); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p21')); ?>:</b>
	<?php echo CHtml::encode($data->p21); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p22')); ?>:</b>
	<?php echo CHtml::encode($data->p22); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p23')); ?>:</b>
	<?php echo CHtml::encode($data->p23); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p24')); ?>:</b>
	<?php echo CHtml::encode($data->p24); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p25')); ?>:</b>
	<?php echo CHtml::encode($data->p25); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p26')); ?>:</b>
	<?php echo CHtml::encode($data->p26); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p27a')); ?>:</b>
	<?php echo CHtml::encode($data->p27a); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p27b')); ?>:</b>
	<?php echo CHtml::encode($data->p27b); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p27c')); ?>:</b>
	<?php echo CHtml::encode($data->p27c); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p27d')); ?>:</b>
	<?php echo CHtml::encode($data->p27d); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p27e')); ?>:</b>
	<?php echo CHtml::encode($data->p27e); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p27f')); ?>:</b>
	<?php echo CHtml::encode($data->p27f); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p27g')); ?>:</b>
	<?php echo CHtml::encode($data->p27g); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p27h')); ?>:</b>
	<?php echo CHtml::encode($data->p27h); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p28')); ?>:</b>
	<?php echo CHtml::encode($data->p28); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p29')); ?>:</b>
	<?php echo CHtml::encode($data->p29); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p30')); ?>:</b>
	<?php echo CHtml::encode($data->p30); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p31')); ?>:</b>
	<?php echo CHtml::encode($data->p31); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p32')); ?>:</b>
	<?php echo CHtml::encode($data->p32); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p33')); ?>:</b>
	<?php echo CHtml::encode($data->p33); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p34')); ?>:</b>
	<?php echo CHtml::encode($data->p34); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p35')); ?>:</b>
	<?php echo CHtml::encode($data->p35); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p36a')); ?>:</b>
	<?php echo CHtml::encode($data->p36a); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p36b')); ?>:</b>
	<?php echo CHtml::encode($data->p36b); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p36c')); ?>:</b>
	<?php echo CHtml::encode($data->p36c); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p36d')); ?>:</b>
	<?php echo CHtml::encode($data->p36d); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p36e')); ?>:</b>
	<?php echo CHtml::encode($data->p36e); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p36f')); ?>:</b>
	<?php echo CHtml::encode($data->p36f); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p36g')); ?>:</b>
	<?php echo CHtml::encode($data->p36g); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p36h')); ?>:</b>
	<?php echo CHtml::encode($data->p36h); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p36i')); ?>:</b>
	<?php echo CHtml::encode($data->p36i); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p36j')); ?>:</b>
	<?php echo CHtml::encode($data->p36j); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p36k')); ?>:</b>
	<?php echo CHtml::encode($data->p36k); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p36l')); ?>:</b>
	<?php echo CHtml::encode($data->p36l); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p36m')); ?>:</b>
	<?php echo CHtml::encode($data->p36m); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p36n')); ?>:</b>
	<?php echo CHtml::encode($data->p36n); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p37')); ?>:</b>
	<?php echo CHtml::encode($data->p37); ?>
	<br />

	*/ ?>

</div>