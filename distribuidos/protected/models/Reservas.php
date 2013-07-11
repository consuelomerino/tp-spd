<?php

/**
 * This is the model class for table "reservas".
 *
 * The followings are the available columns in table 'reservas':
 * @property string $nombre_apellido
 * @property string $numero_tarjeta
 * @property string $caducidad_tarjeta
 * @property string $viaje_inicio
 * @property string $viaje_fin
 * @property string $ciudad_origen
 * @property string $ciudad_destino
 * @property integer $categoria_hotel
 * @property integer $cantidad_personas
 * @property string $telefono
 * @property integer $id_reserva
 */
class Reservas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Reservas the static model class
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
		return 'reservas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_reserva', 'required'),
			array('categoria_hotel, cantidad_personas, id_reserva', 'numerical', 'integerOnly'=>true),
			array('nombre_apellido, numero_tarjeta, ciudad_origen, ciudad_destino, telefono', 'length', 'max'=>255),
			array('caducidad_tarjeta, viaje_inicio, viaje_fin', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nombre_apellido, numero_tarjeta, caducidad_tarjeta, viaje_inicio, viaje_fin, ciudad_origen, ciudad_destino, categoria_hotel, cantidad_personas, telefono, id_reserva', 'safe', 'on'=>'search'),
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
			'nombre_apellido' => 'Nombres y Apellidos',
			'numero_tarjeta' => 'Numero de Tarjeta',
			'caducidad_tarjeta' => 'Caducidad de la Tarjeta',
			'viaje_inicio' => 'Fecha de inicio del Viaje',
			'viaje_fin' => 'Fecha del final del Viaje',
			'ciudad_origen' => 'Ciudad de Origen',
			'ciudad_destino' => 'Ciudad Destino',
			'categoria_hotel' => 'Categoria del Hotel',
			'cantidad_personas' => 'Cantidad de Personas',
			'telefono' => 'Telefono particular',
			'id_reserva' => 'Id Reserva',
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

		$criteria->compare('nombre_apellido',$this->nombre_apellido,true);
		$criteria->compare('numero_tarjeta',$this->numero_tarjeta,true);
		$criteria->compare('caducidad_tarjeta',$this->caducidad_tarjeta,true);
		$criteria->compare('viaje_inicio',$this->viaje_inicio,true);
		$criteria->compare('viaje_fin',$this->viaje_fin,true);
		$criteria->compare('ciudad_origen',$this->ciudad_origen,true);
		$criteria->compare('ciudad_destino',$this->ciudad_destino,true);
		$criteria->compare('categoria_hotel',$this->categoria_hotel);
		$criteria->compare('cantidad_personas',$this->cantidad_personas);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('id_reserva',$this->id_reserva);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}