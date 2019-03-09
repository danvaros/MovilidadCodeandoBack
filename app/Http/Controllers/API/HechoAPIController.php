<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateHechoAPIRequest;
use App\Http\Requests\API\UpdateHechoAPIRequest;
use App\Models\Hecho;
use App\Repositories\HechoRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class HechoController
 * @package App\Http\Controllers\API
 */

class HechoAPIController extends AppBaseController
{
    /** @var  HechoRepository */
    private $hechoRepository;

    public function __construct(HechoRepository $hechoRepo)
    {
        $this->hechoRepository = $hechoRepo;
    }

    /**
     * Display a listing of the Hecho.
     * GET|HEAD /hechos
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->hechoRepository->pushCriteria(new RequestCriteria($request));
        $this->hechoRepository->pushCriteria(new LimitOffsetCriteria($request));
        $hechos = $this->hechoRepository->all();

        return $this->sendResponse($hechos->toArray(), 'Hechos retrieved successfully');
    }

    /**
     * Store a newly created Hecho in storage.
     * POST /hechos
     *
     * @param CreateHechoAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateHechoAPIRequest $request)
    {
        $input = $request->all();

        $hechos = $this->hechoRepository->create($input);

        return $this->sendResponse($hechos->toArray(), 'Hecho saved successfully');
    }

    /**
     * Display the specified Hecho.
     * GET|HEAD /hechos/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Hecho $hecho */
        $hecho = $this->hechoRepository->findWithoutFail($id);

        if (empty($hecho)) {
            return $this->sendError('Hecho not found');
        }

        return $this->sendResponse($hecho->toArray(), 'Hecho retrieved successfully');
    }

    /**
     * Update the specified Hecho in storage.
     * PUT/PATCH /hechos/{id}
     *
     * @param  int $id
     * @param UpdateHechoAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHechoAPIRequest $request)
    {
        $input = $request->all();

        /** @var Hecho $hecho */
        $hecho = $this->hechoRepository->findWithoutFail($id);

        if (empty($hecho)) {
            return $this->sendError('Hecho not found');
        }

        $hecho = $this->hechoRepository->update($input, $id);

        return $this->sendResponse($hecho->toArray(), 'Hecho updated successfully');
    }

    /**
     * Remove the specified Hecho from storage.
     * DELETE /hechos/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Hecho $hecho */
        $hecho = $this->hechoRepository->findWithoutFail($id);

        if (empty($hecho)) {
            return $this->sendError('Hecho not found');
        }

        $hecho->delete();

        return $this->sendResponse($id, 'Hecho deleted successfully');
    }
}
