<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Hecho
 * @package App\Models
 * @version March 9, 2019, 10:42 pm UTC
 *
 * @property integer ID
 * @property string Fecha
 * @property string Mes
 * @property string Hora
 * @property string Servicio
 * @property string Tipo
 * @property string Modo
 * @property string Estado
 * @property string Calle_uno
 * @property string Calle_dos
 * @property string No_dom
 * @property string Colonia
 * @property integer Conductores_heridos
 * @property integer Pasajeros_heridos
 * @property integer Peatones_heridos
 * @property integer Conductores_muertos
 * @property integer Pasajeros_muertos
 * @property integer Peatones_muertos
 * @property string Sexo
 * @property string Tipo_enervante
 * @property string Ruta
 * @property string Unidad
 */
class Hecho extends Model
{
    use SoftDeletes;

    public $table = 'hechos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'ID',
        'Fecha',
        'Mes',
        'Hora',
        'Servicio',
        'Tipo',
        'Modo',
        'Estado',
        'Calle_uno',
        'Calle_dos',
        'No_dom',
        'Colonia',
        'Conductores_heridos',
        'Pasajeros_heridos',
        'Peatones_heridos',
        'Conductores_muertos',
        'Pasajeros_muertos',
        'Peatones_muertos',
        'Sexo',
        'Tipo_enervante',
        'Ruta',
        'Unidad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ID' => 'integer',
        'Fecha' => 'string',
        'Mes' => 'string',
        'Hora' => 'string',
        'Servicio' => 'string',
        'Tipo' => 'string',
        'Modo' => 'string',
        'Estado' => 'string',
        'Calle_uno' => 'string',
        'Calle_dos' => 'string',
        'No_dom' => 'string',
        'Colonia' => 'string',
        'Conductores_heridos' => 'integer',
        'Pasajeros_heridos' => 'integer',
        'Peatones_heridos' => 'integer',
        'Conductores_muertos' => 'integer',
        'Pasajeros_muertos' => 'integer',
        'Peatones_muertos' => 'integer',
        'Sexo' => 'string',
        'Tipo_enervante' => 'string',
        'Ruta' => 'string',
        'Unidad' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
