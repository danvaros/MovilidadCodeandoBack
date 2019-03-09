<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateAtropelladoAPIRequest;
use App\Http\Requests\API\UpdateAtropelladoAPIRequest;
use App\Models\Atropellado;
use App\Repositories\AtropelladoRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use DB;

/**
 * Class AtropelladoController
 * @package App\Http\Controllers\API
 */

class AtropelladoAPIController extends AppBaseController
{
    /** @var  AtropelladoRepository */
    private $atropelladoRepository;

    public function __construct(AtropelladoRepository $atropelladoRepo)
    {
        $this->atropelladoRepository = $atropelladoRepo;
    }

    /**
     * Display a listing of the Atropellado.
     * GET|HEAD /atropellados
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->atropelladoRepository->pushCriteria(new RequestCriteria($request));
        $this->atropelladoRepository->pushCriteria(new LimitOffsetCriteria($request));
        $atropellados = $this->atropelladoRepository->all();

        return $this->sendResponse($atropellados->toArray(), 'Atropellados retrieved successfully');
    }

    /**
     * Store a newly created Atropellado in storage.
     * POST /atropellados
     *
     * @param CreateAtropelladoAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateAtropelladoAPIRequest $request)
    {
        $input = $request->all();

        $atropellados = $this->atropelladoRepository->create($input);

        return $this->sendResponse($atropellados->toArray(), 'Atropellado saved successfully');
    }

    /**
     * Display the specified Atropellado.
     * GET|HEAD /atropellados/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Atropellado $atropellado */
        $atropellado = $this->atropelladoRepository->findWithoutFail($id);

        if (empty($atropellado)) {
            return $this->sendError('Atropellado not found');
        }

        return $this->sendResponse($atropellado->toArray(), 'Atropellado retrieved successfully');
    }

    /**
     * Update the specified Atropellado in storage.
     * PUT/PATCH /atropellados/{id}
     *
     * @param  int $id
     * @param UpdateAtropelladoAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAtropelladoAPIRequest $request)
    {
        $input = $request->all();

        /** @var Atropellado $atropellado */
        $atropellado = $this->atropelladoRepository->findWithoutFail($id);

        if (empty($atropellado)) {
            return $this->sendError('Atropellado not found');
        }

        $atropellado = $this->atropelladoRepository->update($input, $id);

        return $this->sendResponse($atropellado->toArray(), 'Atropellado updated successfully');
    }

    /**
     * Remove the specified Atropellado from storage.
     * DELETE /atropellados/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Atropellado $atropellado */
        $atropellado = $this->atropelladoRepository->findWithoutFail($id);

        if (empty($atropellado)) {
            return $this->sendError('Atropellado not found');
        }

        $atropellado->delete();

        return $this->sendResponse($id, 'Atropellado deleted successfully');
    }

    public function getColonias()
    {
        $colonias = DB::table('hechos')->select('colonia')->distinct()->get();

        return $this->sendResponse($colonias, 'Todas las colonias.');
    }

    public function getIncidenteTipo($tipo)
    {
        $incidentes = \App\Models\Hecho::where('Tipo','=',$tipo)->get();

        return $this->sendResponse($incidentes, 'Incidentes filtrados por el tipo '. $tipo .'.');
    }

    public function getColoniaSearch($colonia)
    {
        $colonias = \App\Models\Hecho::where('Colonia','=',$colonia)->get();

        return $this->sendResponse($colonias, 'Las colonias se filtraron de acuerdo a '. $colonia .'.');
    }
}
