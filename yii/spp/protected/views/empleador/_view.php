<?php
/* @var $this EmpleadorController */
/* @var $data Empleador */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('em_rut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->em_rut), array('view', 'id'=>$data->em_rut)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('em_nombres')); ?>:</b>
	<?php echo CHtml::encode($data->em_nombres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('em_apellidos')); ?>:</b>
	<?php echo CHtml::encode($data->em_apellidos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('em_mail')); ?>:</b>
	<?php echo CHtml::encode($data->em_mail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('em_direccion')); ?>:</b>
	<?php echo CHtml::encode($data->em_direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('em_fono')); ?>:</b>
	<?php echo CHtml::encode($data->em_fono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('em_password')); ?>:</b>
	<?php echo CHtml::encode($data->em_password); ?>
	<br />


</div>