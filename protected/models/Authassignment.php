<?php

/**
 * This is the model class for table "authassignment".
 *
 * The followings are the available columns in table 'authassignment':
 * @property string $itemname
 * @property string $userid
 * @property string $bizrule
 * @property string $data
 *
 * The followings are the available model relations:
 * @property Authitem $itemname0
 */
class Authassignment extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Authassignment the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'AuthAssignment';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('itemname, userid', 'required'),
            array('itemname, userid', 'length', 'max' => 64),
            array('bizrule, data', 'safe'),
            array('itemname', 'Unicos'), //nuevo
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('itemname, userid, bizrule, data', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'itemname0' => array(self::BELONGS_TO, 'Authitem', 'itemname'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'itemname' => 'Permiso',
            'userid' => 'Usuario',
            'bizrule' => 'Bizrule',
            'data' => 'Data',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('itemname', $this->itemname, true);
        $criteria->compare('userid', $this->userid, true);
        $criteria->compare('bizrule', $this->bizrule, true);
        $criteria->compare('data', $this->data, true);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

    public function getElement($itemname, $userid) {
        $c = new CDbCriteria;
        $c->condition = 'itemname=:It AND userid=:Us';
        $c->params = array(':It' => $itemname, ':Us' => $userid);
        return $this->model()->find($c);
    }

    public function Unicos($attribute, $params) {
        $c = new CDbCriteria;
        $c->condition = 'itemname=:ItemN AND userid=:U';
        $c->params = array(':ItemN' => $this->itemname, ':U' => $this->userid);
        $existe = $this->model()->find($c);
        if (($existe != null)) {//  en esta seccion no existe actualizar.
            $this->addError($attribute, 'Ya existe una asignacion entre el usuario y el elemento de autorización seleccionados.');
        }
    }

}