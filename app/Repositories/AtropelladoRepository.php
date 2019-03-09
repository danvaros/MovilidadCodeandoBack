<?php

namespace App\Repositories;

use App\Models\Atropellado;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AtropelladoRepository
 * @package App\Repositories
 * @version March 9, 2019, 10:42 pm UTC
 *
 * @method Atropellado findWithoutFail($id, $columns = ['*'])
 * @method Atropellado find($id, $columns = ['*'])
 * @method Atropellado first($columns = ['*'])
*/
class AtropelladoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Atropellado::class;
    }
}
