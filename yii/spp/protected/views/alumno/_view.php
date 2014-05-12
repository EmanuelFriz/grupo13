<?php
/* @var $this AlumnoController */
/* @var $data Alumno */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_rut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->al_rut), array('view', 'id'=>$data->al_rut)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_nombres')); ?>:</b>
	<?php echo CHtml::encode($data->al_nombres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_apellidos')); ?>:</b>
	<?php echo CHtml::encode($data->al_apellidos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_mail')); ?>:</b>
	<?php echo CHtml::encode($data->al_mail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_direccion')); ?>:</b>
	<?php echo CHtml::encode($data->al_direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_fono')); ?>:</b>
	<?php echo CHtml::encode($data->al_fono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_password')); ?>:</b>
	<?php echo CHtml::encode($data->al_password); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('al_situacion')); ?>:</b>
	<?php echo CHtml::encode($data->al_situacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_competencia')); ?>:</b>
	<?php echo CHtml::encode($data->al_competencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_referencia')); ?>:</b>
	<?php echo CHtml::encode($data->al_referencia); ?>
	<br />

	*/ ?>

</div>