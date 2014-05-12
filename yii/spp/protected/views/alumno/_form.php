<?php
/* @var $this AlumnoController */
/* @var $model Alumno */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'alumno-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'al_rut'); ?>
		<?php echo $form->textField($model,'al_rut',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->error($model,'al_rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_nombres'); ?>
		<?php echo $form->textField($model,'al_nombres',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'al_nombres'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_apellidos'); ?>
		<?php echo $form->textField($model,'al_apellidos',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'al_apellidos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_mail'); ?>
		<?php echo $form->textField($model,'al_mail',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'al_mail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_direccion'); ?>
		<?php echo $form->textField($model,'al_direccion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'al_direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_fono'); ?>
		<?php echo $form->textField($model,'al_fono'); ?>
		<?php echo $form->error($model,'al_fono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_password'); ?>
		<?php echo $form->textField($model,'al_password',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'al_password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_situacion'); ?>
		<?php echo $form->textField($model,'al_situacion',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'al_situacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_competencia'); ?>
		<?php echo $form->textField($model,'al_competencia',array('size'=>60,'maxlength'=>600)); ?>
		<?php echo $form->error($model,'al_competencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_referencia'); ?>
		<?php echo $form->textField($model,'al_referencia',array('size'=>60,'maxlength'=>600)); ?>
		<?php echo $form->error($model,'al_referencia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->