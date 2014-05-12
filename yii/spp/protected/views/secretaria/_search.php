<?php
/* @var $this SecretariaController */
/* @var $model Secretaria */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'sec_rut'); ?>
		<?php echo $form->textField($model,'sec_rut',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sec_nombres'); ?>
		<?php echo $form->textField($model,'sec_nombres',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sec_apellidos'); ?>
		<?php echo $form->textField($model,'sec_apellidos',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sec_mail'); ?>
		<?php echo $form->textField($model,'sec_mail',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sec_direccion'); ?>
		<?php echo $form->textField($model,'sec_direccion',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sec_fono'); ?>
		<?php echo $form->textField($model,'sec_fono'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->