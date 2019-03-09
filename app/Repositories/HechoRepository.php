<?php

namespace App\Repositories;

use App\Models\Hecho;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class HechoRepository
 * @package App\Repositories
 * @version March 9, 2019, 10:42 pm UTC
 *
 * @method Hecho findWithoutFail($id, $columns = ['*'])
 * @method Hecho find($id, $columns = ['*'])
 * @method Hecho first($columns = ['*'])
*/
class HechoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Hecho::class;
    }
}
