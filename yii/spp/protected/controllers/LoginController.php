<?php

class LoginController extends Controller
{ 
    public function actionIndex()
    {   
        $model= new Alumno();
        if(isset($_POST["Alumno"]["RUT"]))
        {
           
            $model->attributes=$_POST['Alumno'];
            $model->RUT = $_POST["Alumno"]["RUT"];
            $model->PASSWORD = $_POST["Alumno"]["PASSWORD"];
            $RUT_USUARIO = $_POST["Alumno"]["RUT"];
            $PASSWORD = $_POST["Alumno"]["PASSWORD"];
            //if($model->validate())
            //{
                $rut=$model->login();
                //print_r($login);exit;
                if(sizeof($rut)==0)
                {
                    //Yii::app()->user->setFlash('mensaje','Los datos ingresados no son correctos');
                    //$this->redirect(Yii::app()->request->baseUrl."/login/");

                $model= new Profesor();
                if(1 == 1)
                {
                    $model->RUT = $RUT_USUARIO;
                    $model->PASSWORD = $PASSWORD;
                    //if($model->validate())
                    //{
                        $rut=$model->login();
                        //print_r($login);exit;
                        if(sizeof($rut)==0)
                        {
                            //Yii::app()->user->setFlash('mensaje','Los datos ingresados no son correctos');
                            //$this->redirect(Yii::app()->request->baseUrl."/login/");
                        
                        $model= new Empleador();
                        if(1 == 1)
                        {
                           
                            $model->RUT = $RUT_USUARIO;
                            $model->PASSWORD = $PASSWORD;
                            //if($model->validate())
                            //{
                                $rut=$model->login();
                                //print_r($login);exit;
                                if(sizeof($rut)==0)
                                {
                                    //Yii::app()->user->setFlash('mensaje','Los datos ingresados no son correctos');
                                    //$this->redirect(Yii::app()->request->baseUrl."/login/");
                                    $model= new Secretaria();
                                    if(1 == 1)
                                    {
                                       
                                        $model->RUT = $RUT_USUARIO;
                                        $model->PASSWORD = $PASSWORD;
                                        //if($model->validate())
                                        //{
                                            $rut=$model->login();
                                            //print_r($login);exit;
                                            if(sizeof($rut)==0)
                                            {
                                                //Yii::app()->user->setFlash('mensaje','Los datos ingresados no son correctos');
                                                //$this->redirect(Yii::app()->request->baseUrl."/login/");
                                            }
                                            else
                                            {
                                                $session=new CHttpSession;
                                                $session->open();
                                                $session['RUT'] = $RUT_USUARIO;
                                                $session['TIPO_USUARIO'] = "secretaria";
                                                $this->redirect(Yii::app()->request->baseUrl."/index.php/login/logueado"); 
                                            }
                                        //}
                                    }
                                }
                                else
                                {
                                    $session=new CHttpSession;
                                    $session->open();
                                    $session['RUT'] = $RUT_USUARIO;
                                    $session['TIPO_USUARIO'] = "empleador";
                                    $this->redirect(Yii::app()->request->baseUrl."/index.php/login/logueado"); 
                                }
                            //}
                        }

                        }
                        else
                        {
                            $session=new CHttpSession;
                            $session->open();
                            $session['RUT'] = $RUT_USUARIO;;
                            $session['TIPO_USUARIO'] = "profesor";
                            $this->redirect(Yii::app()->request->baseUrl."/index.php/login/logueado"); 
                        }
                    //}
                }

                }
                else
                {
                    $session=new CHttpSession;
                    $session->open();
                    $session['RUT'] = $RUT_USUARIO;
                    $session['TIPO_USUARIO'] = "alumno";
                    $this->redirect(Yii::app()->request->baseUrl."/index.php/login/logueado"); 
                }
            //}
        }
        $this->render("index",compact("model"));
        
    }
    
    public function actionLogueado()
    {
        $session=new CHttpSession;
        $session->open();
        if(isset($session["RUT"]))
        {
            
            $this->render("logueado",compact("session"));
        }else
        {
            $this->redirect(Yii::app()->request->baseUrl."/index.php/login/");
        }
    }
     public function actionCerrar()
    {
        $session=new CHttpSession;
        $session->open();
        $session->destroy();
        $this->redirect(Yii::app()->request->baseUrl."/index.php/login");
        //$this->redirect(Yii::app()->user->returnUrl);
    } 
}
