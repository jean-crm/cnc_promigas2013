<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property string $id
 * @property string $nick
 * @property string $pass
 * @property integer $tipo_doc
 * @property string $num_doc
 * @property string $nombres
 * @property integer $typeUser
 *
 * The followings are the available model relations:
 * @property Authitem[] $authitems
 */
class User extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return User the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'user';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('nick, pass, tipo_doc, nombres, typeUser', 'required'),
            array('tipo_doc, typeUser', 'numerical', 'integerOnly' => true),
            array('nick, num_doc', 'length', 'max' => 50),
            array('pass', 'length', 'max' => 416),
            array('nombres', 'length', 'max' => 100),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, nick, pass, tipo_doc, num_doc, nombres, typeUser', 'safe', 'on' => 'search'),
            );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'authitems' => array(self::MANY_MANY, 'Authitem', 'authassignment(userid, itemname)'),
            );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'nick' => 'Nickname',
            'pass' => 'Contraseña',
            'tipo_doc' => 'Tipo de identificación',
            'num_doc' => 'Número de identificación',
            'nombres' => 'Nombre',
            'typeUser' => 'Tipo de usuario',
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

        $criteria->compare('id', $this->id, true);
        $criteria->compare('nick', $this->nick, true);
        $criteria->compare('pass', $this->pass, true);
        $criteria->compare('tipo_doc', $this->tipo_doc);
        $criteria->compare('num_doc', $this->num_doc, true);
        $criteria->compare('nombres', $this->nombres, true);
        $criteria->compare('typeUser', $this->typeUser);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            ));
    }

    //nuevo
    public function getUsers() {
        $model = $this->findAll();
        $array = array();
        if (!empty($model)) {
            foreach ($model as $value) {
                $array = (array) $array + array($value->nick => $value->nick . ' (' . $value->nick . ')');
            }
        }
        return $array;
    }

    public function getUserByNick($nick) {
        //busca el usuario por el nick y retorna su nick
        $c = new CDbCriteria;
        $c->condition = 'nick=:Nick';
        $c->params = array(':Nick' => $nick);
        $model = $this->find($c);
        $u = 'sin asignar';
        if (!empty($model)) {
            $u = $model->nick;
        }
        return $u;
    }

    public function getId($nick) {
        //busca el usuario por el nick y retorna su id
        $c = new CDbCriteria;
        $c->condition = 'nick=:Nick';
        $c->params = array(':Nick' => $nick);
        $model = $this->find($c);
        $u = null;
        if (!empty($model)) {
            $u = $model->id;
        }
        return $u;
    }

    public function getTipoDoc() {
        return array(
            1 => 'Cédula de ciudadania',
            2 => 'N.I.T.',
            );
    }

    public function getTipoDocText($i) {
        $array = $this->getTipoDoc();
        return isset($array[$i]) ? $array[$i] : "tipo desconocido ({$i})";
    }

    /**
     * funcion que retorna el nombre de User por su nick
     */
    public function getNombreByNick($pk) {
        $c = new CDbCriteria;
        $c->condition = 'nick=:PK';
        $c->params = array(':PK' => $pk);
        $model = $this->model()->find($c);
        $r = 'Sin asignar';
        if (!empty($model))
            $r = $model->nombres;
        return $r;
    }

    /**
     * Retorna un row del usuario
     */
    private function getById($id) {
        $row = Yii::app()->db->createCommand(array(
            'from' => 'user',
            'where' => 'id=:id',
            'params' => array(':id' => $id),
            ))->queryRow();

        return $row;
    }

    public function getNickById($id) {
        $row = $this->getById($id);
        return (empty($row) ? 'Usuario no encontrado' : $row['nick']);
    }

    /**
     * Desencripta en string pasado.
     * Son obligatorios los dos parametros.
     * @param string $valor es el valor que se va a desencriptar, no debe 
     * ser mayor de 416 caracteres.
     * @param string $key llave o testigo para encriptar, no mayor de 30 caracteres
     * se recomienda usar los 30 caracteres para mayor seguridad.
     * @return string valor encriptado con un tamaño no mayor de 30 caracteres
     */
    public function desencriptar($valor, $key) {
        for ($index2 = 0; $index2 < 5; $index2++) {
            $key = base64_encode($key);
        }
        $key = substr($key, 1, 30);
        for ($index = 0; $index < 3; $index++) {
            $valor = base64_decode($valor);
        }
        for ($index1 = 0; $index1 < 4; $index1++) {
            $valor = $this->fnDecrypt($valor, $key);
        }
        return $valor;
    }

    /**
     * Encripta en string pasado.
     * Son obligatorios los dos parametros.
     * @param string $valor es el valor que se va a encriptar, no debe 
     * ser mayor de 30 caracteres.
     * @param string $key llave o testigo para encriptar, no mayor de 30 caracteres
     * se recomienda usar los 30 caracteres para mayor seguridad.
     * @return string valor encriptado con un tamaño de 416 caracteres
     */
    public function encriptar($valor, $key) {
        for ($index2 = 0; $index2 < 5; $index2++) {
            $key = base64_encode($key);
        }
        $key = substr($key, 1, 30);
        for ($index1 = 0; $index1 < 4; $index1++) {
            $valor = $this->fnEncrypt($valor, $key);
        }
        for ($index = 0; $index < 3; $index++) {
            $valor = base64_encode($valor);
        }
        return $valor;
    }

    private function fnEncrypt($sValue, $sSecretKey) {
        return rtrim(
            base64_encode(
                mcrypt_encrypt(
                    MCRYPT_RIJNDAEL_256, $sSecretKey, $sValue, MCRYPT_MODE_ECB, mcrypt_create_iv(
                        mcrypt_get_iv_size(
                            MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB
                            ), MCRYPT_RAND)
                    )
                ), "\0"
            );
    }

    private function fnDecrypt($sValue, $sSecretKey) {
        return rtrim(
            mcrypt_decrypt(
                MCRYPT_RIJNDAEL_256, $sSecretKey, base64_decode($sValue), MCRYPT_MODE_ECB, mcrypt_create_iv(
                    mcrypt_get_iv_size(
                        MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB
                        ), MCRYPT_RAND
                    )
                ), "\0"
            );
    }

    public function getTipoUser() {
        return array(
            1 => "Producción",
            2 => "Pruebas",
            );
    }

    public function getTipoUserText($i) {
        $array = $this->getTipoUser();
        return (isset($array[$i]) ? $array[$i] : "Error: el tipo {$i} no existe");
    }

    /**
     * Buscar un usuario por su username
     * @return Model Retorna el modelo.
     */
    public function loadModel($username) {
        $c = new CDbCriteria();
        $c->condition = 'nick=:NICK';
        $c->params = array(':NICK' => $username);
        return $this->model()->find($c);
    }

    /**
     * Buscar un usuario por su username
     * @return Model Retorna el modelo.
     */
    public function loadModelById($id) {
        $c = new CDbCriteria();
        $c->condition = 'id=:ID';
        $c->params = array(':ID' => $id);
        return $this->model()->find($c);
    }

    /**
     * Buscar un usuario por su username
     * @return String Retorna el nombre del usuario.
     */
    public function getNameById($id) {
        $r='Sin asignar';
        $c = new CDbCriteria();
        $c->condition = 'id=:ID';
        $c->params = array(':ID' => $id);
        $model=$this->model()->find($c);
        if (!empty($model)) {
            $r=$model->nombres;
        }
        return $r;
    }

    /**
     * Obtiene el id del usuario actualmente logeado
    */
    public function getUserActual(){
        $user=Yii::app()->user->name;
        return $this->getId($user);
    }

    /**
     * Obtener el modelo del usuario actual
    */
    public function getUserActualModel(){
        $user=Yii::app()->user->name;
        return $this->loadModel($user);
    }

}