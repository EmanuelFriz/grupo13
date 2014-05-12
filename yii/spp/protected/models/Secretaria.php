<?php

/**
 * This is the model class for table "secretaria".
 *
 * The followings are the available columns in table 'secretaria':
 * @property string $sec_rut
 * @property string $sec_nombres
 * @property string $sec_apellidos
 * @property string $sec_mail
 * @property string $sec_direccion
 * @property integer $sec_fono
 * @property string $sec_password
 */
class Secretaria extends CActiveRecord
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
		return 'secretaria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sec_rut, sec_nombres, sec_apellidos, sec_mail, sec_direccion, sec_fono, sec_password', 'required'),
			array('sec_fono', 'numerical', 'integerOnly'=>true),
			array('sec_rut', 'length', 'max'=>9),
			array('sec_nombres, sec_apellidos, sec_mail', 'length', 'max'=>30),
			array('sec_direccion', 'length', 'max'=>100),
			array('sec_password', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('sec_rut, sec_nombres, sec_apellidos, sec_mail, sec_direccion, sec_fono, sec_password', 'safe', 'on'=>'search'),
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
			'sec_rut' => 'Sec Rut',
			'sec_nombres' => 'Sec Nombres',
			'sec_apellidos' => 'Sec Apellidos',
			'sec_mail' => 'Sec Mail',
			'sec_direccion' => 'Sec Direccion',
			'sec_fono' => 'Sec Fono',
			'sec_password' => 'Sec Password',
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

		$criteria->compare('sec_rut',$this->sec_rut,true);
		$criteria->compare('sec_nombres',$this->sec_nombres,true);
		$criteria->compare('sec_apellidos',$this->sec_apellidos,true);
		$criteria->compare('sec_mail',$this->sec_mail,true);
		$criteria->compare('sec_direccion',$this->sec_direccion,true);
		$criteria->compare('sec_fono',$this->sec_fono);
		$criteria->compare('sec_password',$this->sec_password,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Secretaria the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function login()
	{
		$user=Secretaria::model()->find('sec_rut=? and sec_password=?',array($this->RUT,$this->PASSWORD));
        return $user;
	}
}
