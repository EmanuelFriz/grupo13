<?php
/* @var $this ProfesorController */
/* @var $data Profesor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pr_rut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pr_rut), array('view', 'id'=>$data->pr_rut)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pr_nombres')); ?>:</b>
	<?php echo CHtml::encode($data->pr_nombres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pr_apellidos')); ?>:</b>
	<?php echo CHtml::encode($data->pr_apellidos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pr_mail')); ?>:</b>
	<?php echo CHtml::encode($data->pr_mail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pr_direccion')); ?>:</b>
	<?php echo CHtml::encode($data->pr_direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pr_fono')); ?>:</b>
	<?php echo CHtml::encode($data->pr_fono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pr_password')); ?>:</b>
	<?php echo CHtml::encode($data->pr_password); ?>
	<br />


</div>