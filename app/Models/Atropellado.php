<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Atropellado
 * @package App\Models
 * @version March 9, 2019, 10:42 pm UTC
 *
 * @property string usuario
 * @property string tuit
 * @property string liga
 * @property string short_url
 * @property string fecha
 * @property string comenatario1
 * @property string comentario2
 * @property string comentario3
 * @property string comentario4
 * @property string comentario5
 */
class Atropellado extends Model
{
    use SoftDeletes;

    public $table = 'atropellados';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'usuario',
        'tuit',
        'liga',
        'short_url',
        'fecha',
        'comenatario1',
        'comentario2',
        'comentario3',
        'comentario4',
        'comentario5'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'usuario' => 'string',
        'tuit' => 'string',
        'liga' => 'string',
        'short_url' => 'string',
        'fecha' => 'string',
        'comenatario1' => 'string',
        'comentario2' => 'string',
        'comentario3' => 'string',
        'comentario4' => 'string',
        'comentario5' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
