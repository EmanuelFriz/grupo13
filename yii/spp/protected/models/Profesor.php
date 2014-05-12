<?php

/**
 * This is the model class for table "profesor".
 *
 * The followings are the available columns in table 'profesor':
 * @property string $pr_rut
 * @property string $pr_nombres
 * @property string $pr_apellidos
 * @property string $pr_mail
 * @property string $pr_direccion
 * @property integer $pr_fono
 * @property string $pr_password
 */
class Profesor extends CActiveRecord
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
		return 'profesor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pr_rut, pr_nombres, pr_apellidos, pr_mail, pr_direccion, pr_fono, pr_password', 'required'),
			array('pr_fono', 'numerical', 'integerOnly'=>true),
			array('pr_rut', 'length', 'max'=>9),
			array('pr_nombres, pr_apellidos, pr_mail', 'length', 'max'=>30),
			array('pr_direccion', 'length', 'max'=>100),
			array('pr_password', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pr_rut, pr_nombres, pr_apellidos, pr_mail, pr_direccion, pr_fono, pr_password', 'safe', 'on'=>'search'),
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
			'pr_rut' => 'Pr Rut',
			'pr_nombres' => 'Pr Nombres',
			'pr_apellidos' => 'Pr Apellidos',
			'pr_mail' => 'Pr Mail',
			'pr_direccion' => 'Pr Direccion',
			'pr_fono' => 'Pr Fono',
			'pr_password' => 'Pr Password',
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

		$criteria->compare('pr_rut',$this->pr_rut,true);
		$criteria->compare('pr_nombres',$this->pr_nombres,true);
		$criteria->compare('pr_apellidos',$this->pr_apellidos,true);
		$criteria->compare('pr_mail',$this->pr_mail,true);
		$criteria->compare('pr_direccion',$this->pr_direccion,true);
		$criteria->compare('pr_fono',$this->pr_fono);
		$criteria->compare('pr_password',$this->pr_password,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Profesor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

     public function login()
	{
		$user=Profesor::model()->find('pr_rut=? and pr_password=?',array($this->RUT,$this->PASSWORD));
        return $user;
	}

}
