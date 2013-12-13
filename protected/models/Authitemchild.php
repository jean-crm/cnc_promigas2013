<?php

/**
 * This is the model class for table "Authitemchild".
 *
 * The followings are the available columns in table 'Authitemchild':
 * @property string $parent
 * @property string $child
 *
 * The followings are the available model relations:
 * @property Authitem $parent0
 * @property Authitem $child0
 */
class Authitemchild extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @return Authitemchild the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'AuthItemChild';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('parent, child', 'required'),
            array('parent, child', 'length', 'max' => 64),
            array('parent', 'Unicos'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('parent, child', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'parent0' => array(self::BELONGS_TO, 'Authitem', 'parent'),
            'child0' => array(self::BELONGS_TO, 'Authitem', 'child'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'parent' => 'Padre',
            'child' => 'Hijo',
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

        $criteria->compare('parent', $this->parent, true);
        $criteria->compare('child', $this->child, true);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

    //NUEVO
    public function Unicos($attribute, $params) {
        if ($this->model()->isNewRecord) {
            $c = new CDbCriteria;
            $c->condition = 'parent=:P AND child=:C';
            $c->params = array(':P' => $this->parent, ':C' => $this->child);
            $existe = $this->model()->find($c);
            if (($existe != null)) {//  en esta seccion no existe actualizar.
                $this->addError($attribute, 'Ya existe una relacion de jerarquia entre estos dos elementos de autorización.');
            } elseif ($this->parent == $this->child) {
                $this->addError($attribute, 'No está permitido crear una relacion con ella misma.');
            }
        }
    }

    public function getParent($data) {
        return $data->parent . ' (' . Authitem::model()->getTipoText($data->parent0->type) . ')';
    }

    public function getChild($data) {
        return $data->child . ' (' . Authitem::model()->getTipoText($data->child0->type) . ')';
    }

    public function getElement($parent, $child) {
        $c = new CDbCriteria;
        $c->condition = 'parent=:PA AND child=:CH';
        $c->params = array(':PA' => $parent, ':CH' => $child);
        return $this->model()->find($c);
    }

}