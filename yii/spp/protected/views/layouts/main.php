<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title>SGPP</title>
</head>
<?php echo Yii::app()->user->ui->displayErrorConsole(); ?>
<body>

<div class="container" id="page">

	<div id="header">
		 
		<img src="<?php echo Yii::app()->request->baseUrl?>/images/ubb.png " />
	</div><!-- header -->

	<div id="mainmenu">
		<?php 

			$session = new CHttpSession;
            $session->open();
			//echo $session["RUT"].'<br>';
			//echo $session["TIPO_USUARIO"];
            //echo Yii::app()->request->url;
			if(!isset($session["RUT"])){
				$this->widget('zii.widgets.CMenu',array(
				'items'=>array(
						 array('label'=>'Home', 'url'=>array('/site/index')),
						 array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
						 array('label'=>'Login', 'url'=>array('/login/')),						
					),
				));
				if(Yii::app()->request->url != "/~grupo13/yii/spp/index.php/login/"
				   && Yii::app()->request->url != "/~grupo13/yii/spp/index.php/site/index"
				   && Yii::app()->request->url != "/~grupo13/yii/spp/index.php/site/page?view=about"){
				    $this->redirect(Yii::app()->request->baseUrl."/index.php/login/");
				}
			    
			}
			else{
				if($session["TIPO_USUARIO"] == "alumno"){
					$this->widget('zii.widgets.CMenu',array(
					'items'=>array(
							 array('label'=>'Home', 'url'=>array('/site/index')),
							 array('label'=>'Prácticas Disponibles', 'url'=>array('')),
							 array('label'=>'Pre-Inscribir Práctica', 'url'=>array('')),
							 array('label'=>'Mi Práctica', 'url'=>array('')),
							 array('label'=>'Logout', 'url'=>array('/login/cerrar')),						
						),
					));
				}
				if($session["TIPO_USUARIO"] == "empleador"){
					$this->widget('zii.widgets.CMenu',array(
					'items'=>array(
							 array('label'=>'Home', 'url'=>array('/site/index')),
							 array('label'=>'Practicas Alumnos', 'url'=>array('')),
							 array('label'=>'Logout', 'url'=>array('/login/cerrar')),						
						),
					));
				}
				if($session["TIPO_USUARIO"] == "profesor"){
					$this->widget('zii.widgets.CMenu',array(
					'items'=>array(
							 array('label'=>'Home', 'url'=>array('/site/index')),
							 array('label'=>'Crear Practica', 'url'=>array('')),
							 array('label'=>'Ofertas de Práctica', 'url'=>array('')),
							 array('label'=>'Practica', 'url'=>array('')),
							 array('label'=>'Alumnos', 'url'=>array('/alumno/')),
							 array('label'=>'Empleador', 'url'=>array('/empleador/')),
							 array('label'=>'Logout', 'url'=>array('/login/cerrar')),						
						),
					));
				}
				if($session["TIPO_USUARIO"] == "secretaria"){
					$this->widget('zii.widgets.CMenu',array(
					'items'=>array(
							 array('label'=>'Home', 'url'=>array('/site/index')),
							 array('label'=>'Crear Practica', 'url'=>array('')),
							 array('label'=>'Ofertas de Práctica', 'url'=>array('')),
							 array('label'=>'Practica', 'url'=>array('')),
							 array('label'=>'Alumnos', 'url'=>array('/alumno/')),
							 array('label'=>'Empleador', 'url'=>array('/empleador/')),
							 array('label'=>'Logout', 'url'=>array('/login/cerrar')),										
						),
					));
				}
			}
			/*$this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'Eventos', 'url'=>array('/eventos/')),
				array('label'=>'Login', 'url'=>array('/login')),
				array('label'=>'Logout', 'url'=>array('/login/cerrar')),
				
			),
		));*/ ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Facultad de Ciencias Empresariales  &copy; <?php echo date('Y'); ?>
		
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>