

<h1>Iniciar Sesión</h1>

<?php 
if(Yii::app()->user->hasFlash('mensaje'))
{
    ?>
    <h3 style="color: green;"><?php echo Yii::app()->user->getFlash('mensaje')?></h3>
    <?php    
} ?>



<?php echo CHtml::beginForm('','post',array("id"=>"form","name"=>"form")); ?>

   
    
     <p>
        RUT <br><?php echo CHtml::activeTextField($model,'RUT');echo CHtml::error($model,'RUT'); ?>
       <hr /> 
    </p>
    
     <p>
        PASSWORD <br><?php echo CHtml::activePasswordField($model,'PASSWORD');echo CHtml::error($model,'PASSWORD'); ?>
       <hr /> 
    </p>

    <p> 
     <?php echo CHtml::submitButton('submit',array("title"=>"Enviar","value"=>"Enviar")); ?>
    </p>
    
<?php echo CHtml::endForm(); ?>


