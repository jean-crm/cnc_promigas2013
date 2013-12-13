<?php

/**
 * This is the model class for table "respuestas".
 *
 * The followings are the available columns in table 'respuestas':
 * @property integer $id_con
 * @property string $fecha_encuesta
 * @property integer $p1
 * @property integer $p2
 * @property integer $p3
 * @property integer $p4
 * @property string $razonp1
 * @property string $razonp2
 * @property string $razonp3
 * @property string $razonp4
 * @property string $razon2p1
 * @property string $razon2p2
 * @property string $razon2p3
 * @property string $razon2p4
 * @property integer $nosoyususario
 */
class Respuestas extends CActiveRecord
{
	public $_contacto=null;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Respuestas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'respuestas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//nuevo
			array('id_con', 'unique'),
			array('p1, p2, p3, p4', 'default', 'value'=>'9', 'setOnEmpty'=>true),
			//fin nuevo
			array('id_con', 'required'),
			array('id_con, p1, p2, p3, p4, nosoyususario', 'numerical', 'integerOnly'=>true),
			array('razonp1, razonp2, razonp3, razonp4, razon2p1, razon2p2, razon2p3, razon2p4', 'length', 'max'=>200),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
			array('id_con, fecha_encuesta, p1, p2, p3, p4, razonp1, razonp2, razonp3, razonp4, razon2p1, razon2p2, razon2p3, razon2p4, nosoyususario', 'safe', 'on'=>'search'),
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
			'id_con' => 'Id Con',
			'fecha_encuesta' => 'Fecha Encuesta',
			'p1' => 'El cumplimiento',
			'p2' => 'La comunicación',
			'p3' => 'La actitud de servicio',
			'p4' => 'La calidad',
			'razon2p1' => 'Razon2p1',
			'razon2p2' => 'Razon2p2',
			'razon2p3' => 'Razon2p3',
			'razon2p4' => 'Razon2p4',
			'nosoyususario' => 'No soy usuario de este servicio',
			);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_con',$this->id_con);
		$criteria->compare('fecha_encuesta',$this->fecha_encuesta,true);
		$criteria->compare('p1',$this->p1);
		$criteria->compare('p2',$this->p2);
		$criteria->compare('p3',$this->p3);
		$criteria->compare('p4',$this->p4);
		$criteria->compare('razonp1',$this->razonp1,true);
		$criteria->compare('razonp2',$this->razonp2,true);
		$criteria->compare('razonp3',$this->razonp3,true);
		$criteria->compare('razonp4',$this->razonp4,true);
		$criteria->compare('razon2p1',$this->razon2p1,true);
		$criteria->compare('razon2p2',$this->razon2p2,true);
		$criteria->compare('razon2p3',$this->razon2p3,true);
		$criteria->compare('razon2p4',$this->razon2p4,true);
		$criteria->compare('nosoyususario',$this->nosoyususario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}
}