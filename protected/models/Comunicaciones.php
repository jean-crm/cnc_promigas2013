<?php

/**
 * This is the model class for table "comunicaciones".
 *
 * The followings are the available columns in table 'comunicaciones':
 * @property integer $cod_empleado
 * @property integer $p1
 * @property integer $p2
 * @property integer $p3a
 * @property integer $p3b
 * @property integer $p3c
 * @property integer $p4_1
 * @property integer $p4_2
 * @property integer $p4_3
 * @property integer $p4_4
 * @property integer $p4_5
 * @property integer $p4_6
 * @property integer $p4_7
 * @property integer $p4_8
 * @property integer $p4_9
 * @property integer $p4_10
 * @property integer $p4_11
 * @property integer $p4_12
 * @property integer $p4_13
 * @property integer $p4_14
 * @property integer $p4_15
 * @property integer $p4_16
 * @property integer $p4_17
 * @property integer $p4_18
 * @property integer $p4_19
 * @property integer $p4_20
 * @property integer $p5_1
 * @property integer $p5_2
 * @property integer $p5_3
 * @property integer $p5_4
 * @property integer $p5_5
 * @property integer $p5_6
 * @property integer $p5_7
 * @property integer $p5_8
 * @property integer $p5_9
 * @property integer $p5_10
 * @property integer $p5_11
 * @property integer $p5_12
 * @property integer $p5_13
 * @property integer $p5_14
 * @property integer $p5_15
 * @property integer $p5_16
 * @property integer $p5_17
 * @property integer $p5_18
 * @property integer $p5_19
 * @property integer $p5_20
 * @property integer $p6_1
 * @property integer $p6_2
 * @property integer $p6_3
 * @property integer $p6_4
 * @property integer $p6_5
 * @property integer $p6_6
 * @property integer $p6_7
 * @property integer $p6_8
 * @property integer $p6_9
 * @property integer $p6_10
 * @property integer $p6_11
 * @property integer $p6_12
 * @property integer $p6_13
 * @property integer $p6_14
 * @property integer $p6_15
 * @property integer $p6_16
 * @property integer $p6_17
 * @property integer $p6_18
 * @property integer $p6_19
 * @property integer $p6_20
 * @property string $p7
 * @property string $p8
 * @property integer $p9
 * @property integer $p10
 * @property string $p11
 * @property string $p12
 * @property integer $p13
 * @property string $p14
 * @property integer $p15
 * @property string $p16
 * @property integer $p17
 * @property string $p18
 * @property integer $p19a
 * @property integer $p19b
 * @property integer $p19c
 * @property integer $p19d
 * @property integer $p20
 * @property integer $p21
 * @property integer $p22
 * @property string $p22_otro
 * @property integer $p23
 * @property string $p24
 * @property integer $p25
 * @property integer $p26
 * @property integer $p27a
 * @property integer $p27b
 * @property integer $p27c
 * @property integer $p27d
 * @property integer $p27e
 * @property integer $p27f
 * @property integer $p27g
 * @property integer $p27h
 * @property integer $p28
 * @property string $p29
 * @property string $p30
 * @property string $p31
 * @property string $p32
 * @property integer $p33
 * @property integer $p34
 * @property integer $p35
 * @property integer $p36a
 * @property integer $p36b
 * @property integer $p36c
 * @property integer $p36d
 * @property integer $p36e
 * @property integer $p36f
 * @property integer $p36g
 * @property integer $p36h
 * @property integer $p36i
 * @property integer $p36j
 * @property integer $p36k
 * @property integer $p36l
 * @property integer $p36m
 * @property integer $p36n
 * @property string $p37
 */
class Comunicaciones extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Comunicaciones the static model class
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
		return 'comunicaciones';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cod_empleado, p1, p2, p3a, p3b, p3c, p4_1, p4_2, p4_3, p4_4, p4_5, p4_6, p4_7, p4_8, p4_9, p4_10, p4_11, p4_12, p4_13, p4_14, p4_15, p4_16, p4_17, p4_18, p4_19, p4_20, p5_1, p5_2, p5_3, p5_4, p5_5, p5_6, p5_7, p5_8, p5_9, p5_10, p5_11, p5_12, p5_13, p5_14, p5_15, p5_16, p5_17, p5_18, p5_19, p5_20, p6_1, p6_2, p6_3, p6_4, p6_5, p6_6, p6_7, p6_8, p6_9, p6_10, p6_11, p6_12, p6_13, p6_14, p6_15, p6_16, p6_17, p6_18, p6_19, p6_20, p9, p10, p13, p15, p17, p19a, p19b, p19c, p19d, p20, p21, p22, p23, p25, p26, p27a, p27b, p27c, p27d, p27e, p27f, p27g, p27h, p28, p33, p34, p36a, p36b, p36c, p36d, p36e, p36f, p36g, p36h, p36i, p36j, p36k, p36l, p36m, p36n', 'numerical', 'integerOnly'=>true),
			array('p7, p8, p11, p12, p14, p16, p18, p22_otro, p24, p29, p30, p31, p32, p35, p37', 'length', 'max'=>300),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_empleado, p1, p2, p3a, p3b, p3c, p4_1, p4_2, p4_3, p4_4, p4_5, p4_6, p4_7, p4_8, p4_9, p4_10, p4_11, p4_12, p4_13, p4_14, p4_15, p4_16, p4_17, p4_18, p4_19, p4_20, p5_1, p5_2, p5_3, p5_4, p5_5, p5_6, p5_7, p5_8, p5_9, p5_10, p5_11, p5_12, p5_13, p5_14, p5_15, p5_16, p5_17, p5_18, p5_19, p5_20, p6_1, p6_2, p6_3, p6_4, p6_5, p6_6, p6_7, p6_8, p6_9, p6_10, p6_11, p6_12, p6_13, p6_14, p6_15, p6_16, p6_17, p6_18, p6_19, p6_20, p7, p8, p9, p10, p11, p12, p13, p14, p15, p16, p17, p18, p19a, p19b, p19c, p19d, p20, p21, p22, p23, p24, p25, p26, p27a, p27b, p27c, p27d, p27e, p27f, p27g, p27h, p28, p29, p30, p31, p32, p33, p34, p35, p36a, p36b, p36c, p36d, p36e, p36f, p36g, p36h, p36i, p36j, p36k, p36l, p36m, p36n, p37', 'safe', 'on'=>'search'),
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
			'cod_empleado' => 'Código del empleado',
			'p1' => '1.	¿Usted tiene acceso de Interactúa?',
			'p2' => '2.	¿Con qué frecuencia ingresa a Interactúa?',
			'p3a' => 'A.	Rapidez (velocidad de navegación)',
			'p3b' => 'B.	Interactividad (permite a los usuarios interactuar o colaborar entre sí o con la herramienta)',
			'p3c' => 'C.	La facilidad de uso y acceso a la información',
			'p4_1' => 'Noticias',
			'p4_2' => 'Cumpleaños',
			'p4_3' => 'Prográmate',
			'p4_4' => 'Clasificados',
			'p4_5' => 'My Site',
			'p4_6' => 'Estado del tiempo',
			'p4_7' => 'Ingresos / Egresos',
			'p4_8' => 'Directorio',
			'p4_9' => 'Información corporativa',
			'p4_10' => 'Estilo Promigas',
			'p4_11' => 'Promifondo',
			'p4_12' => 'Fundación Promigas',
			'p4_13' => 'Enlaces',
			'p4_14' => 'Semana QHSE',
			'p4_15' => 'Gestión de Ideas',
			'p4_16' => 'Somos Solidarios',
			'p4_17' => 'Cultura HSE',
			'p4_18' => 'Lecciones Aprendidas',
			'p4_19' => 'Gestión del Conocimiento',
			'p4_20' => 'Evaluación de Proveedores',
			'p5_1' => 'Noticias',
			'p5_2' => 'Cumpleaños',
			'p5_3' => 'Prográmate',
			'p5_4' => 'Clasificados',
			'p5_5' => 'My Site',
			'p5_6' => 'Estado del tiempo',
			'p5_7' => 'Ingresos / Egresos',
			'p5_8' => 'Directorio',
			'p5_9' => 'Información corporativa',
			'p5_10' => 'Estilo Promigas',
			'p5_11' => 'Promifondo',
			'p5_12' => 'Fundación Promigas',
			'p5_13' => 'Enlaces',
			'p5_14' => 'Semana QHSE',
			'p5_15' => 'Gestión de Ideas',
			'p5_16' => 'Somos Solidarios',
			'p5_17' => 'Cultura HSE',
			'p5_18' => 'Lecciones Aprendidas',
			'p5_19' => 'Gestión del Conocimiento',
			'p5_20' => 'Evaluación de Proveedores',
			'p6_1' => 'Noticias',
			'p6_2' => 'Cumpleaños',
			'p6_3' => 'Prográmate',
			'p6_4' => 'Clasificados',
			'p6_5' => 'My Site',
			'p6_6' => 'Estado del tiempo',
			'p6_7' => 'Ingresos / Egresos',
			'p6_8' => 'Directorio',
			'p6_9' => 'Información corporativa',
			'p6_10' => 'Estilo Promigas',
			'p6_11' => 'Promifondo',
			'p6_12' => 'Fundación Promigas',
			'p6_13' => 'Enlaces',
			'p6_14' => 'Semana QHSE',
			'p6_15' => 'Gestión de Ideas',
			'p6_16' => 'Somos Solidarios',
			'p6_17' => 'Cultura HSE',
			'p6_18' => 'Lecciones Aprendidas',
			'p6_19' => 'Gestión del Conocimiento',
			'p6_20' => 'Evaluación de Proveedores',
			'p7' => '7.	¿Qué información le gustaría encontrar en Interactúa?',
			'p8' => '8.	¿Qué sugerencias tiene para mejorar Interactúa?',
			'p9' => '9.	Usted recibió la revista Prominotas…',
			'p10' => '10.	¿Usted encuentra interesantes los contenidos de Prominotas?',
			'p11' => '11.	¿Por qué?',
			'p12' => '12.	¿Qué información de Prominotas es la que más le interesa?',
			'p13' => '13.	¿A través de qué medio preferiría recibir los contenidos de Prominotas? ',
			'p14' => '14.	¿Qué sugerencias tiene para mejorar Prominotas?',
			'p15' => '15.	¿Usted recibe las circulares enviadas a través del Centro de Administración de Documentos?',
			'p16' => '16.	¿Qué sugerencias tiene para mejorar las circulares?',
			'p17' => '17.	¿La información que recibe a través de los medios internos le permite conocer cada vez más la organización?',
			'p18' => '18.	¿Por qué?',
			'p19a' => 'A.	Objetiva (Responde a lo que acontece en la organización)',
			'p19b' => 'B.	Clara (Las comunicaciones son sencillas y por tanto fáciles de entender)',
			'p19c' => 'C.	Creíble (Las comunicaciones entregadas por Promigas generan confianza)',
			'p19d' => 'D.	Suficiente (Tiene el contenido necesario para sentirme parte de la organización y responde a mis inquietudes)',
			'p20' => '20.	Considera que Promigas divulga la información en forma oportuna?',
			'p21' => '21.	Usted participa en las reuniones de su grupo primario',
			'p22' => '22.	¿Cada cuánto considera usted que se debería reunir su grupo primario?',
			'p22_otro' => '¿Cuál?',
			'p23' => '23.	¿Usted considera que los grupos primarios son importantes?',
			'p24' => '24.	¿Por qué?',
			'p25' => '25.	En los grupo primarios, ¿informa usted sobre sus necesidades para lograr mejores resultados?',
			'p26' => '26.	¿Las ideas que usted ha propuesto en el grupo primario han sido tomadas en cuenta?',
			'p27a' => 'A.	Conocer información importante sobre la empresa y sobre proyectos especiales que se estén llevando a cabo en Promigas',
			'p27b' => 'B.	Aclarar información importante sobre la empresa, frente a políticas y sobre proyectos especiales que se estén llevando a cabo en Promigas',
			'p27c' => 'C.	Mejorar los procesos de la dependencia por las ideas que se presentan',
			'p27d' => 'D.	Generar un ambiente de confianza y franqueza para poder expresar sus inquietudes ',
			'p27e' => 'E.	Mejorar la integración del equipo de trabajo',
			'p27f' => 'F.	Participar en la toma de decisiones que están relacionadas con su trabajo',
			'p27g' => 'G.	Hacer seguimiento a los indicadores de su dependencia (Tablero de Gestión y/o Matriz de Planeación Operacional)',
			'p27h' => 'H.	Estimular el crecimiento personal y profesional',
			'p28' => '28.	¿Considera usted  que el tiempo de la reunión del grupo primario es suficiente?',
			'p29' => '29.	¿Cuánto tiempo considera usted apropiado para la reunión del grupo primario?',
			'p30' => '30.	¿Qué información tratada en el grupo primario considera usted que es la más relevante?',
			'p31' => '31.	Qué información tratada en el grupo primario considera que no es relevante?',
			'p32' => '32.	¿Qué otra información le gustaría a usted que se tratara en los grupos primarios?',
			'p33' => '33.	¿Usted realiza la programación anual de los grupos primarios?',
			'p34' => '34.	¿Usted envía con antelación la agenda que se va a tratar a los miembros de su grupo?',
			'p35' => '35.	¿Con qué antelación envía la agenda?',
			'p36a' => 'Información de la empresa',
			'p36b' => 'Aspectos tratados en su grupo primario, al que asiste como integrante',
			'p36c' => 'Retroalimentación sobre inquietudes planteadas en grupos anteriores y sobre las decisiones tomadas',
			'p36d' => 'Seguimiento a los compromisos adquiridos',
			'p36e' => 'Resultados obtenidos en su trabajo',
			'p36f' => 'Situaciones que estén afectando a la organización, a la dependencia y/o a ellos mismos',
			'p36g' => 'Necesidades de apoyo, entre otros temas',
			'p36h' => 'Análisis de los indicadores de los procesos en el tablero de gestión',
			'p36i' => 'Seguimiento al avance de la planeación operacional',
			'p36j' => 'Seguimiento a las ideas presentadas por los integrantes del grupo',
			'p36k' => 'Ideas: llevar temas relacionados con los procesos que se requieren mejorar o fortalecer para atender eficazmente los retos, oportunidades y resultados del área',
			'p36l' => 'Lecciones aprendidas: Divulgar enseñanzas y aprendizajes obtenidos con el objeto de minimizar y/o eliminar eventos no deseados',
			'p36m' => 'Reconocimientos: Hacer reconocimiento público a los colaboradores resaltando sus aportes al mejoramiento de algún aspecto del trabajo para lograr la excelencia',
			'p36n' => 'Crecimiento personal: Estimular la adquisición o el perfeccionamiento, de manera progresiva, de comportamientos, actitudes y competencias que miembros del grupo requieren para tener éxito y que trascienden el plano laboral',
			'p37' => '37.	¿Qué sugerencias podría darnos para el mejoramiento de los grupos primarios?',
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

		$criteria->compare('cod_empleado',$this->cod_empleado);
		$criteria->compare('p1',$this->p1);
		$criteria->compare('p2',$this->p2);
		$criteria->compare('p3a',$this->p3a);
		$criteria->compare('p3b',$this->p3b);
		$criteria->compare('p3c',$this->p3c);
		$criteria->compare('p4_1',$this->p4_1);
		$criteria->compare('p4_2',$this->p4_2);
		$criteria->compare('p4_3',$this->p4_3);
		$criteria->compare('p4_4',$this->p4_4);
		$criteria->compare('p4_5',$this->p4_5);
		$criteria->compare('p4_6',$this->p4_6);
		$criteria->compare('p4_7',$this->p4_7);
		$criteria->compare('p4_8',$this->p4_8);
		$criteria->compare('p4_9',$this->p4_9);
		$criteria->compare('p4_10',$this->p4_10);
		$criteria->compare('p4_11',$this->p4_11);
		$criteria->compare('p4_12',$this->p4_12);
		$criteria->compare('p4_13',$this->p4_13);
		$criteria->compare('p4_14',$this->p4_14);
		$criteria->compare('p4_15',$this->p4_15);
		$criteria->compare('p4_16',$this->p4_16);
		$criteria->compare('p4_17',$this->p4_17);
		$criteria->compare('p4_18',$this->p4_18);
		$criteria->compare('p4_19',$this->p4_19);
		$criteria->compare('p4_20',$this->p4_20);
		$criteria->compare('p5_1',$this->p5_1);
		$criteria->compare('p5_2',$this->p5_2);
		$criteria->compare('p5_3',$this->p5_3);
		$criteria->compare('p5_4',$this->p5_4);
		$criteria->compare('p5_5',$this->p5_5);
		$criteria->compare('p5_6',$this->p5_6);
		$criteria->compare('p5_7',$this->p5_7);
		$criteria->compare('p5_8',$this->p5_8);
		$criteria->compare('p5_9',$this->p5_9);
		$criteria->compare('p5_10',$this->p5_10);
		$criteria->compare('p5_11',$this->p5_11);
		$criteria->compare('p5_12',$this->p5_12);
		$criteria->compare('p5_13',$this->p5_13);
		$criteria->compare('p5_14',$this->p5_14);
		$criteria->compare('p5_15',$this->p5_15);
		$criteria->compare('p5_16',$this->p5_16);
		$criteria->compare('p5_17',$this->p5_17);
		$criteria->compare('p5_18',$this->p5_18);
		$criteria->compare('p5_19',$this->p5_19);
		$criteria->compare('p5_20',$this->p5_20);
		$criteria->compare('p6_1',$this->p6_1);
		$criteria->compare('p6_2',$this->p6_2);
		$criteria->compare('p6_3',$this->p6_3);
		$criteria->compare('p6_4',$this->p6_4);
		$criteria->compare('p6_5',$this->p6_5);
		$criteria->compare('p6_6',$this->p6_6);
		$criteria->compare('p6_7',$this->p6_7);
		$criteria->compare('p6_8',$this->p6_8);
		$criteria->compare('p6_9',$this->p6_9);
		$criteria->compare('p6_10',$this->p6_10);
		$criteria->compare('p6_11',$this->p6_11);
		$criteria->compare('p6_12',$this->p6_12);
		$criteria->compare('p6_13',$this->p6_13);
		$criteria->compare('p6_14',$this->p6_14);
		$criteria->compare('p6_15',$this->p6_15);
		$criteria->compare('p6_16',$this->p6_16);
		$criteria->compare('p6_17',$this->p6_17);
		$criteria->compare('p6_18',$this->p6_18);
		$criteria->compare('p6_19',$this->p6_19);
		$criteria->compare('p6_20',$this->p6_20);
		$criteria->compare('p7',$this->p7,true);
		$criteria->compare('p8',$this->p8,true);
		$criteria->compare('p9',$this->p9);
		$criteria->compare('p10',$this->p10);
		$criteria->compare('p11',$this->p11,true);
		$criteria->compare('p12',$this->p12,true);
		$criteria->compare('p13',$this->p13);
		$criteria->compare('p14',$this->p14,true);
		$criteria->compare('p15',$this->p15);
		$criteria->compare('p16',$this->p16,true);
		$criteria->compare('p17',$this->p17);
		$criteria->compare('p18',$this->p18,true);
		$criteria->compare('p19a',$this->p19a);
		$criteria->compare('p19b',$this->p19b);
		$criteria->compare('p19c',$this->p19c);
		$criteria->compare('p19d',$this->p19d);
		$criteria->compare('p20',$this->p20);
		$criteria->compare('p21',$this->p21);
		$criteria->compare('p22',$this->p22);
		$criteria->compare('p22_otro',$this->p22_otro, true);
		$criteria->compare('p23',$this->p23);
		$criteria->compare('p24',$this->p24,true);
		$criteria->compare('p25',$this->p25);
		$criteria->compare('p26',$this->p26);
		$criteria->compare('p27a',$this->p27a);
		$criteria->compare('p27b',$this->p27b);
		$criteria->compare('p27c',$this->p27c);
		$criteria->compare('p27d',$this->p27d);
		$criteria->compare('p27e',$this->p27e);
		$criteria->compare('p27f',$this->p27f);
		$criteria->compare('p27g',$this->p27g);
		$criteria->compare('p27h',$this->p27h);
		$criteria->compare('p28',$this->p28);
		$criteria->compare('p29',$this->p29,true);
		$criteria->compare('p30',$this->p30,true);
		$criteria->compare('p31',$this->p31,true);
		$criteria->compare('p32',$this->p32,true);
		$criteria->compare('p33',$this->p33);
		$criteria->compare('p34',$this->p34);
		$criteria->compare('p35',$this->p35);
		$criteria->compare('p36a',$this->p36a);
		$criteria->compare('p36b',$this->p36b);
		$criteria->compare('p36c',$this->p36c);
		$criteria->compare('p36d',$this->p36d);
		$criteria->compare('p36e',$this->p36e);
		$criteria->compare('p36f',$this->p36f);
		$criteria->compare('p36g',$this->p36g);
		$criteria->compare('p36h',$this->p36h);
		$criteria->compare('p36i',$this->p36i);
		$criteria->compare('p36j',$this->p36j);
		$criteria->compare('p36k',$this->p36k);
		$criteria->compare('p36l',$this->p36l);
		$criteria->compare('p36m',$this->p36m);
		$criteria->compare('p36n',$this->p36n);
		$criteria->compare('p37',$this->p37,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Consulta el modelo dependiendo del cod_empleado pasado
	*/
	public function load($cod_empleado){
		$c=new CDbCriteria;
		$c->compare('cod_empleado',$cod_empleado);
		return $this->model()->find($c);
	}
}