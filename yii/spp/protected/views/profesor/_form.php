<?php
/* @var $this ProfesorController */
/* @var $model Profesor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profesor-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pr_rut'); ?>
		<?php echo $form->textField($model,'pr_rut',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->error($model,'pr_rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pr_nombres'); ?>
		<?php echo $form->textField($model,'pr_nombres',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'pr_nombres'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pr_apellidos'); ?>
		<?php echo $form->textField($model,'pr_apellidos',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'pr_apellidos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pr_mail'); ?>
		<?php echo $form->textField($model,'pr_mail',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'pr_mail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pr_direccion'); ?>
		<?php echo $form->textField($model,'pr_direccion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'pr_direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pr_fono'); ?>
		<?php echo $form->textField($model,'pr_fono'); ?>
		<?php echo $form->error($model,'pr_fono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pr_password'); ?>
		<?php echo $form->textField($model,'pr_password',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'pr_password'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->