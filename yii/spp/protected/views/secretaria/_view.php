<?php
/* @var $this SecretariaController */
/* @var $data Secretaria */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('sec_rut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->sec_rut), array('view', 'id'=>$data->sec_rut)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sec_nombres')); ?>:</b>
	<?php echo CHtml::encode($data->sec_nombres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sec_apellidos')); ?>:</b>
	<?php echo CHtml::encode($data->sec_apellidos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sec_mail')); ?>:</b>
	<?php echo CHtml::encode($data->sec_mail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sec_direccion')); ?>:</b>
	<?php echo CHtml::encode($data->sec_direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sec_fono')); ?>:</b>
	<?php echo CHtml::encode($data->sec_fono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sec_password')); ?>:</b>
	<?php echo CHtml::encode($data->sec_password); ?>
	<br />


</div>