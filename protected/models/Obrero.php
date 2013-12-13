<?php 
/**
* 
*/
class Obrero 
{
	
	/**
     * Obtiene la escala de 1 a 10
     */
	public static function getEscala1a10() {
		return array(
			'01' => '1',
			'02' => '2',
			'03' => '3',
			'04' => '4',
			'05' => '5',
			'06' => '6',
			'07' => '7',
			'08' => '8',
			'09' => '9',
			'10' => '10',
			// '99' => 'NR/NS',
			);
	}
	/**
     * Obtiene la escala de 1 a 3
     */
	public static function getEscala1a3() {
		return array(
			'1' => '1',
			'2' => '2',
			'3' => '3',
			// '99' => 'NR/NS',
			);
	}
	/**
     * Obtiene la escala de 1 a 3
     */
	public static function getEscala1a3_2() {
		return array(
			'1' => '1',
			'2' => '2',
			'3' => '3',
			'99' => 'NR/NS',
			);
	}

	/**
     * Obtiene la escala de 1 a 2
     */
	public static function getEscala1a2() {
		return array(
			'1' => '1',
			'2' => '2',
			// '99' => 'NR/NS',
			);
	}

	/**
	 * Obtiene la escala p2 Frecuencia en Formulario Comunicaciones
	*/
	public static function getFrecuenciaCom(){
		return array(
			'1'=>'Todos los días',
			'2'=>'Dos veces por semana',
			'3'=>'Una vez a la semana',
			'4'=>'Una vez al mes',
			'5'=>'No lo leo',
			);
	}

	/**
     * Obtiene la escala de 1 a 2
     */
	public static function getEscalaSN() {
		return array(
			'1' => 'Si',
			'2' => 'No',
			);
	}

	/**
     * Obtiene la escala de 1 a 2
     */
	public static function getEscala1a5() {
		return array(
			'5' => '5',
			'4' => '4',
			'3' => '3',
			'2' => '2',
			'1' => '1',
			'9' => 'NR/NS',
			);
	}

	/**
     * Obtiene la escala de 1 a 2
     */
	public static function getEscala1a5_2() {
		return array(
			'5' => '5',
			'4' => '4',
			'3' => '3',
			'2' => '2',
			'1' => '1',
			// '9' => 'NR/NS',
			);
	}

	/**
     * Obtiene la escala de ACCESO
     */
	public static function getEscalaAcceso() {
		return array(
			'99' => 'Selecciona una...',
			'10' => 'Teléfono',
			'20' => 'Presencial/Reuniones',
			'30' => 'Correo electrónico',
			'40' => 'Portal/intranet',
			'50' => 'Cartas/comunicación escrita',
			);
	}

	/**
	 * Obtener el listado de periodos revista prominotas
	*/
	public static function getRevistaProminotas(){
		return array(
			'1'=>'En el último año',
			'2'=>'En los últimos dos años',
			'3'=>'Hace más de dos años',
			'4'=>'Nunca la ha recibido',
			);

	}

	/**
	 * Obtiene la escala para p22
	**/
	public static function getP22(){
		return array(
			'1'=>'Semanalmente',
			'2'=>'Quincenalmente',
			'3'=>'Mensualmente',
			'4'=>'Otro, ¿Cuál?',
			);
	}

	/**
	 * Obtiene la escala para p20
	**/
	public static function getP20(){
		return array(
			'1'=>'Siempre',
			'2'=>'La mayoría de veces',
			'3'=>'Ocasionalmente',
			'4'=>'Nunca',
			);
	}

	/**
     * Imprima la cabecera de la getEscala1a10
     */
	public static function printEscala1a10_1() {
		echo '<th style="text-align: center; background-color: #cccccc;">En una escala de 1 a 10 donde 1 es malo y 10 es excelente</th>';
		for ($index = 1; $index <= 10; $index++) {
			switch ($index) {
				case 1:
				echo '<th style="text-align: center; background-color: #cccccc;">Malo (1)</th>';
				break;
				case 10:
				echo '<th style="text-align: center; background-color: #cccccc;">Excelente (10)</th>';
				break;
				default:
				echo '<th style="text-align: center; background-color: #cccccc;">' . $index . '</th>';
				break;
			}
		}
		// echo '<th style="text-align: center; background-color: #cccccc;">NS/NR</th>';
	}

	/**
     * Imprima la cabecera de la getEscala1a10
     */
	public static function printEscala1a10_2() {
		echo '<th style="text-align: center; background-color: #cccccc;">En una escala de 1 a 10 donde 1 es malo y 10 es excelente Cómo califica a Mansarovar en cuanto a…</th>';
		for ($index = 1; $index <= 10; $index++) {
			switch ($index) {
				case 1:
				echo '<th style="text-align: center; background-color: #cccccc;">Malo (1)</th>';
				break;
				case 10:
				echo '<th style="text-align: center; background-color: #cccccc;">Excelente (10)</th>';
				break;
				default:
				echo '<th style="text-align: center; background-color: #cccccc;">' . $index . '</th>';
				break;
			}
		}
		// echo '<th style="text-align: center; background-color: #cccccc;">NS/NR</th>';
	}

	/**
     * Imprima la cabecera de la getEscala1a10
     */
	public static function printEscala1a10_n($n) {
		echo '<th style="text-align: center; background-color: #cccccc;">'.$n.'</th>';
		for ($index = 1; $index <= 10; $index++) {
			switch ($index) {
				case 1:
				echo '<th style="text-align: center; background-color: #cccccc;">Malo (1)</th>';
				break;
				case 10:
				echo '<th style="text-align: center; background-color: #cccccc;">Excelente (10)</th>';
				break;
				default:
				echo '<th style="text-align: center; background-color: #cccccc;">' . $index . '</th>';
				break;
			}
		}
		// echo '<th style="text-align: center; background-color: #cccccc;">NS/NR</th>';
	}

	/**
     * Imprima la cabecera de la getEscala1a10
     */
	public static function printEscala1a5_n($n) {
		echo '<th style="text-align: center; background-color: #cccccc;">'.$n.'</th>';
		echo '<th style="text-align: center; background-color: #cccccc;">Muy Satisfecho</th>';
		echo '<th style="text-align: center; background-color: #cccccc;">Satisfecho</th>';
		echo '<th style="text-align: center; background-color: #cccccc;">Ni satisfecho ni insatisfecho</th>';
		echo '<th style="text-align: center; background-color: #cccccc;">Insatisfecho</th>';
		echo '<th style="text-align: center; background-color: #cccccc;">Muy insatisfecho</th>';
		echo '<th style="text-align: center; background-color: #cccccc;">No Aplica</th>';
	}

	/**
     * Imprima la cabecera de la getEscala1a10
     */
	public static function printEscala1a10_3() {
		echo '<th style="text-align: center; background-color: #cccccc;"></th>';
		for ($index = 1; $index <= 10; $index++) {
			switch ($index) {
				case 1:
				echo '<th style="text-align: center; background-color: #cccccc;">1 es Nada o muy poco</th>';
				break;
				case 7:
				echo '<th style="text-align: center; background-color: #cccccc;">7 es Lo necesario</th>';
				break;
				case 10:
				echo '<th style="text-align: center; background-color: #cccccc;">10 es Mucho, se clasificaría como conocedor o experto</th>';
				break;
				default:
				echo '<th style="text-align: center; background-color: #cccccc;">' . $index . '</th>';
				break;
			}
		}
		// echo '<th style="text-align: center; background-color: #cccccc;">NS/NR</th>';
	}

	/**
     * Imprima la cabecera de la getEscala1a10
     */
	public static function printEscala1a10_4() {
		echo '<th style="text-align: center; background-color: #cccccc;"></th>';
		for ($index = 1; $index <= 10; $index++) {
			switch ($index) {
				case 1:
				echo '<th style="text-align: center; background-color: #cccccc;">1 Totalmente en Desacuerdo</th>';
				break;
				case 10:
				echo '<th style="text-align: center; background-color: #cccccc;">10 Totalmente de Acuerdo</th>';
				break;
				default:
				echo '<th style="text-align: center; background-color: #cccccc;">' . $index . '</th>';
				break;
			}
		}
		// echo '<th style="text-align: center; background-color: #cccccc;">NS/NR</th>';
	}

	/**
     * Imprima la cabecera de la getEscala1a10
     */
	public static function printEscala1a10_5() {
		echo '<th style="text-align: center; background-color: #cccccc;"></th>';
		for ($index = 1; $index <= 10; $index++) {
			switch ($index) {
				case 1:
				echo '<th style="text-align: center; background-color: #cccccc;">1 Mínima</th>';
				break;
				case 10:
				echo '<th style="text-align: center; background-color: #cccccc;">10 Máxima</th>';
				break;
				default:
				echo '<th style="text-align: center; background-color: #cccccc;">' . $index . '</th>';
				break;
			}
		}
		// echo '<th style="text-align: center; background-color: #cccccc;">NS/NR</th>';
	}

	/**
     * Imprima la cabecera de la getEscala1a10
     */
	public static function printEscala1a5_7() {
		echo '<th style="background-color: #cccccc;">3.	En una escala de 1 a 5, donde 1 es la menor evaluación y 5 la más alta, cómo evalúa la nueva versión del Interactúa en cuanto a…</th>';
		for ($index = 5; $index >= 1; $index--) {
			switch ($index) {
				case 5:
				echo '<th style="text-align: center; background-color: #cccccc;">La mejor evaluación</th>';
				break;
				case 1:
				echo '<th style="text-align: center; background-color: #cccccc;">La menor evaluación</th>';
				break;
				default:
				echo '<th style="text-align: center; background-color: #cccccc;">' . $index . '</th>';
				break;
			}
		}
		// echo '<th style="text-align: center; background-color: #cccccc;">NS/NR</th>';
	}

	/**
     * Imprima la cabecera de la getEscala1a10
     */
	public static function printEscala1a10_6() {
		echo '<th style="text-align: center; background-color: #cccccc;"></th>';
		for ($index = 1; $index <= 10; $index++) {
			switch ($index) {
				case 1:
				echo '<th style="text-align: center; background-color: #cccccc;">1 Nada útil</th>';
				break;
				case 10:
				echo '<th style="text-align: center; background-color: #cccccc;">10 Totalmente útil</th>';
				break;
				default:
				echo '<th style="text-align: center; background-color: #cccccc;">' . $index . '</th>';
				break;
			}
		}
		// echo '<th style="text-align: center; background-color: #cccccc;">NS/NR</th>';
	}

	/**
     * Imprima la cabecera de la getEscala1a10
     */
	public static function printEscala1a10_7() {
		echo '<th style="text-align: center; background-color: #cccccc;"></th>';
		for ($index = 1; $index <= 10; $index++) {
			switch ($index) {
				case 1:
				echo '<th style="text-align: center; background-color: #cccccc;">1 Totalmente Inadecuada</th>';
				break;
				case 10:
				echo '<th style="text-align: center; background-color: #cccccc;">10 Totalmente Inadecuada</th>';
				break;
				default:
				echo '<th style="text-align: center; background-color: #cccccc;">' . $index . '</th>';
				break;
			}
		}
		// echo '<th style="text-align: center; background-color: #cccccc;">NS/NR</th>';
	}

	/**
     * Imprima la cabecera de la getEscala1a3
     */
	public static function printEscala1a3_1() {
		echo '<th style="text-align: center; background-color: #cccccc;"></th>';
		echo '<th style="text-align: center; background-color: #cccccc;">Por encima de sus expectativas</th>';
		echo '<th style="text-align: center; background-color: #cccccc;">Igual a sus expectativas</th>';
		echo '<th style="text-align: center; background-color: #cccccc;">Por debajo de sus expectativas</th>';
		// echo '<th style="text-align: center; background-color: #cccccc;">NS/NR</th>';
	}
	/**
     * Imprima la cabecera de la getEscala1a3
     */
	public static function printEscala1a3_n($n) {
		echo '<th style="text-align: center; background-color: #cccccc;">'.$n.'</th>';
		echo '<th style="text-align: center; background-color: #cccccc;">Superará sus expectativas</th>';
		echo '<th style="text-align: center; background-color: #cccccc;">Cumplirá con sus expectativas</th>';
		echo '<th style="text-align: center; background-color: #cccccc;">Estará por debajo de sus expectativas</th>';
		// echo '<th style="text-align: center; background-color: #cccccc;">NS/NR</th>';
	}

	/**
     * Imprima la cabecera de la getEscala1a3
     */
	public static function printEscala1a3_2() {
		echo '<th style="text-align: center; background-color: #cccccc;"></th>';
		echo '<th style="text-align: center; background-color: #cccccc;">Ha mejorado</th>';
		echo '<th style="text-align: center; background-color: #cccccc;">Se ha mantenido</th>';
		echo '<th style="text-align: center; background-color: #cccccc;">Ha desmejorado</th>';
		echo '<th style="text-align: center; background-color: #cccccc;">No puede evaluarlo (No estuvo en 2010 ó 2011)</th>';
	}

	/**
     * Imprima la cabecera de la getEscala1a3
     */
	public static function printEscala1a3_3() {
		echo '<th style="text-align: center; background-color: #cccccc;"></th>';
		echo '<th style="text-align: center; background-color: #cccccc;">Facilitan el trabajo de su empresa</th>';
		echo '<th style="text-align: center; background-color: #cccccc;">Complican el trabajo de la empresa</th>';
		echo '<th style="text-align: center; background-color: #cccccc;">No afectan el trabajo de la empresa</th>';
	}

	/**
     * Imprima la cabecera de la getEscala1a3
     */
	public static function printEscala1a3_4() {
		echo '<th style="text-align: center; background-color: #cccccc;"></th>';
		echo '<th style="text-align: center; background-color: #cccccc;">Las secciones de Interactúa que utiliza con mayor frecuencia</th>';
		echo '<th style="text-align: center; background-color: #cccccc;">¿Qué secciones de Interactúa son más necesarias para realizar su trabajo?</th>';
		echo '<th style="text-align: center; background-color: #cccccc;">¿Qué secciones de Interactúa no utiliza usted? </th>';
	}

	/**
     * Imprima la cabecera de la getEscala1a2
     */
	public static function printEscala1a2_1() {
		echo '<th style="text-align: center; background-color: #cccccc;"></th>';
		echo '<th style="text-align: center; background-color: #cccccc;">Si</th>';
		echo '<th style="text-align: center; background-color: #cccccc;">No</th>';
	}

	/**
     * Imprima la cabecera de la getEscala1a2
     */
	public static function printEscala1a2_n($label='') {
		echo '<th style="text-align: center; background-color: #cccccc;">'.$label.'</th>';
		echo '<th style="text-align: center; background-color: #cccccc;">Si</th>';
		echo '<th style="text-align: center; background-color: #cccccc;">No</th>';
	}

	/**
     * Imprima la cabecera de la getEscala1a2
     */
	public static function printEscala1a2_2() {
		echo '<th style="text-align: center; background-color: #cccccc;"></th>';
		echo '<th style="text-align: center; background-color: #cccccc;">Aplicación, distribución y transferencia de pagos</th>';
		echo '<th style="text-align: center; background-color: #cccccc;">Gestión cartera de los cargos por uso del STN</th>';
	}

}

?>