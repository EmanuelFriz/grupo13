<?php

/**
 * This is the model class for table "empleador".
 *
 * The followings are the available columns in table 'empleador':
 * @property string $em_rut
 * @property string $em_nombres
 * @property string $em_apellidos
 * @property string $em_mail
 * @property string $em_direccion
 * @property integer $em_fono
 * @property string $em_password
 */
class Empleador extends CActiveRecord
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
		return 'empleador';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('em_rut, em_nombres, em_apellidos, em_mail, em_direccion, em_fono, em_password', 'required'),
			array('em_fono', 'numerical', 'integerOnly'=>true),
			array('em_rut', 'length', 'max'=>9),
			array('em_nombres, em_apellidos, em_mail', 'length', 'max'=>30),
			array('em_direccion', 'length', 'max'=>100),
			array('em_password', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('em_rut, em_nombres, em_apellidos, em_mail, em_direccion, em_fono, em_password', 'safe', 'on'=>'search'),
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
			'em_rut' => 'Em Rut',
			'em_nombres' => 'Em Nombres',
			'em_apellidos' => 'Em Apellidos',
			'em_mail' => 'Em Mail',
			'em_direccion' => 'Em Direccion',
			'em_fono' => 'Em Fono',
			'em_password' => 'Em Password',
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

		$criteria->compare('em_rut',$this->em_rut,true);
		$criteria->compare('em_nombres',$this->em_nombres,true);
		$criteria->compare('em_apellidos',$this->em_apellidos,true);
		$criteria->compare('em_mail',$this->em_mail,true);
		$criteria->compare('em_direccion',$this->em_direccion,true);
		$criteria->compare('em_fono',$this->em_fono);
		$criteria->compare('em_password',$this->em_password,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Empleador the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function login()
	{
		$user=Empleador::model()->find('em_rut=? and em_password=?',array($this->RUT,$this->PASSWORD));
        return $user;
	}

}

