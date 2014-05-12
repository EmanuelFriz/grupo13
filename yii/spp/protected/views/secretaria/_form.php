<?php
/* @var $this SecretariaController */
/* @var $model Secretaria */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'secretaria-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'sec_rut'); ?>
		<?php echo $form->textField($model,'sec_rut',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->error($model,'sec_rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sec_nombres'); ?>
		<?php echo $form->textField($model,'sec_nombres',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'sec_nombres'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sec_apellidos'); ?>
		<?php echo $form->textField($model,'sec_apellidos',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'sec_apellidos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sec_mail'); ?>
		<?php echo $form->textField($model,'sec_mail',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'sec_mail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sec_direccion'); ?>
		<?php echo $form->textField($model,'sec_direccion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'sec_direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sec_fono'); ?>
		<?php echo $form->textField($model,'sec_fono'); ?>
		<?php echo $form->error($model,'sec_fono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sec_password'); ?>
		<?php echo $form->textField($model,'sec_password',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'sec_password'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->