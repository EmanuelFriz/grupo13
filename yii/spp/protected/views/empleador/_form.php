<?php
/* @var $this EmpleadorController */
/* @var $model Empleador */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'empleador-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'em_rut'); ?>
		<?php echo $form->textField($model,'em_rut',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->error($model,'em_rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'em_nombres'); ?>
		<?php echo $form->textField($model,'em_nombres',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'em_nombres'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'em_apellidos'); ?>
		<?php echo $form->textField($model,'em_apellidos',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'em_apellidos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'em_mail'); ?>
		<?php echo $form->textField($model,'em_mail',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'em_mail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'em_direccion'); ?>
		<?php echo $form->textField($model,'em_direccion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'em_direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'em_fono'); ?>
		<?php echo $form->textField($model,'em_fono'); ?>
		<?php echo $form->error($model,'em_fono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'em_password'); ?>
		<?php echo $form->textField($model,'em_password',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'em_password'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->