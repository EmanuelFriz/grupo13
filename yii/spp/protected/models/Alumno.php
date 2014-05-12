<?php

/**
 * This is the model class for table "alumno".
 *
 * The followings are the available columns in table 'alumno':
 * @property string $al_rut
 * @property string $al_nombres
 * @property string $al_apellidos
 * @property string $al_mail
 * @property string $al_direccion
 * @property integer $al_fono
 * @property string $al_password
 * @property string $al_situacion
 * @property string $al_competencia
 * @property string $al_referencia
 */
class Alumno extends CActiveRecord
{
	private $connection;
	public $RUT;
	public $PASSWORD;


	public function __construct()
    {
        $this->connection=new CDbConnection(Yii::app()->db->connectionString,
        									Yii::app()->db->username,
        									Yii::app()->db->password);
        $this->connection->active=true;
    }
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alumno';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('al_rut, al_nombres, al_apellidos, al_mail, al_direccion, al_fono, al_password, al_situacion, al_competencia, al_referencia', 'required'),
			array('al_fono', 'numerical', 'integerOnly'=>true),
			array('al_rut', 'length', 'max'=>9),
			array('al_nombres, al_apellidos, al_mail', 'length', 'max'=>30),
			array('al_direccion', 'length', 'max'=>100),
			array('al_password', 'length', 'max'=>20),
			array('al_situacion', 'length', 'max'=>40),
			array('al_competencia, al_referencia', 'length', 'max'=>600),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('al_rut, al_nombres, al_apellidos, al_mail, al_direccion, al_fono, al_password, al_situacion, al_competencia, al_referencia', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'al_rut' => 'Al Rut',
			'al_nombres' => 'Al Nombres',
			'al_apellidos' => 'Al Apellidos',
			'al_mail' => 'Al Mail',
			'al_direccion' => 'Al Direccion',
			'al_fono' => 'Al Fono',
			'al_password' => 'Al Password',
			'al_situacion' => 'Al Situacion',
			'al_competencia' => 'Al Competencia',
			'al_referencia' => 'Al Referencia',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('al_rut',$this->al_rut,true);
		$criteria->compare('al_nombres',$this->al_nombres,true);
		$criteria->compare('al_apellidos',$this->al_apellidos,true);
		$criteria->compare('al_mail',$this->al_mail,true);
		$criteria->compare('al_direccion',$this->al_direccion,true);
		$criteria->compare('al_fono',$this->al_fono);
		$criteria->compare('al_password',$this->al_password,true);
		$criteria->compare('al_situacion',$this->al_situacion,true);
		$criteria->compare('al_competencia',$this->al_competencia,true);
		$criteria->compare('al_referencia',$this->al_referencia,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Alumno the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}


	public function login()
	{
		$user=Alumno::model()->find('al_rut=? and al_password=?',array($this->RUT,$this->PASSWORD));
        return $user;
	}


	public function loginAlumno($al_rut){

		$sql="SELECT al_rut, al_nombres, al_apellidos
			  FROM alumno
			  WHERE al_rut = $al_rut";//consulta sql 		
 		$rows = $this->connection->createCommand($sql)->queryAll();
 		return $rows;
	}

	public function passwordAlumno($al_rut){
		$sql="SELECT al_password 
			  FROM alumno
			  WHERE al_rut = $al_rut";//consulta sql 		
 		$rows = $this->connection->createCommand($sql)->queryAll();
 		return $rows;
	}
}
