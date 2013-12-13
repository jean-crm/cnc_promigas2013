<?php

/**
 * This is the model class for table "contacto".
 *
 * The followings are the available columns in table 'contacto':
 * @property integer $id_con
 * @property string $cod_empleado
 * @property string $vp
 * @property string $id_vp
 * @property string $nom_contacto
 * @property string $unidad
 * @property string $id_unidad
 * @property string $nom_servicio
 * @property string $id_servicio
 * @property string $descripcion_servicio
 * @property string $email
 * @property string $empresa
 * @property string $lider
 */
class Contacto extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Contacto the static model class
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
		return 'contacto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_con', 'numerical', 'integerOnly'=>true),
			array('cod_empleado', 'length', 'max'=>50),
			array('vp', 'length', 'max'=>150),
			array('id_vp, id_unidad, id_servicio', 'length', 'max'=>10),
			array('nom_contacto, nom_servicio', 'length', 'max'=>200),
			array('unidad', 'length', 'max'=>100),
			array('email', 'length', 'max'=>400),
			array('empresa', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_con, cod_empleado, vp, id_vp, nom_contacto, unidad, id_unidad, nom_servicio, id_servicio, email, empresa', 'safe', 'on'=>'search'),
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
			'cod_empleado' => 'Código del empleado',
			'vp' => 'Viceprecidencia',
			'id_vp' => 'Id Vp',
			'nom_contacto' => 'Nom Contacto',
			'unidad' => 'Unidad',
			'id_unidad' => 'Id Unidad',
			'nom_servicio' => 'Nom Servicio',
			'id_servicio' => 'Id Servicio',
			'descripcion_servicio' => 'Descripción servicio',
			'email' => 'Email',
			'empresa' => 'Empresa',
			'lider' => 'lider',
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
		$criteria->compare('cod_empleado',$this->cod_empleado,true);
		$criteria->compare('vp',$this->vp,true);
		$criteria->compare('id_vp',$this->id_vp,true);
		$criteria->compare('nom_contacto',$this->nom_contacto,true);
		$criteria->compare('unidad',$this->unidad,true);
		$criteria->compare('id_unidad',$this->id_unidad,true);
		$criteria->compare('nom_servicio',$this->nom_servicio,true);
		$criteria->compare('id_servicio',$this->id_servicio,true);
		$criteria->compare('descripcion_servicio',$this->descripcion_servicio,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('empresa',$this->empresa,true);
		$criteria->compare('lider',$this->lider,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			)
		);
	}

	/**
	 * Cargar el contacto por el codigo del empleado (cod_empleado)
	 * que NO exista en la tabla resultado
	*/
	public function load($cod_empleado){
		$c=new CDbCriteria;
		$c->compare('cod_empleado',$cod_empleado);
		$c->join='LEFT JOIN '.Respuestas::model()->tableSchema->name.' r ON t.id_con=r.id_con';
		$c->addCondition('r.id_con is null');
		return $this->model()->find($c);
	}

	/**
	 * Cargar el contacto por el codigo del empleado (cod_empleado) y por unidad (id_unidad)
	 * que NO exista en la tabla resultado
	*/
	public function load2($cod_empleado, $idunidad){
		$c=new CDbCriteria;
		$c->compare('cod_empleado',$cod_empleado);
		$c->compare('id_unidad',$idunidad);
		$c->join='LEFT JOIN '.Respuestas::model()->tableSchema->name.' r ON t.id_con=r.id_con';
		$c->addCondition('r.id_con is null');
		return $this->model()->findAll($c);
	}

	/**
	 * Cargar el contacto por el id del contacto (id_con) 
	 * que NO exista en la tabla resultado
	*/
	public function load3($id_con){
		$c=new CDbCriteria;
		$c->compare('id_con',$id_con);
		return $this->model()->find($c);
	}

	/**
	 * Cargar el contacto por el codigo del empleado (cod_empleado) 
	 * 
	*/
	public function load4($cod_empleado){
		$c=new CDbCriteria;
		$c->compare('cod_empleado',$cod_empleado);
		return $this->model()->find($c);
	}
}