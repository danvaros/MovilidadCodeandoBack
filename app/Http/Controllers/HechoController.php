<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHechoRequest;
use App\Http\Requests\UpdateHechoRequest;
use App\Repositories\HechoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class HechoController extends AppBaseController
{
    /** @var  HechoRepository */
    private $hechoRepository;

    public function __construct(HechoRepository $hechoRepo)
    {
        $this->hechoRepository = $hechoRepo;
    }

    /**
     * Display a listing of the Hecho.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->hechoRepository->pushCriteria(new RequestCriteria($request));
        $hechos = $this->hechoRepository->all();

        return view('hechos.index')
            ->with('hechos', $hechos);
    }

    /**
     * Show the form for creating a new Hecho.
     *
     * @return Response
     */
    public function create()
    {
        return view('hechos.create');
    }

    /**
     * Store a newly created Hecho in storage.
     *
     * @param CreateHechoRequest $request
     *
     * @return Response
     */
    public function store(CreateHechoRequest $request)
    {
        $input = $request->all();

        $hecho = $this->hechoRepository->create($input);

        Flash::success('Hecho saved successfully.');

        return redirect(route('hechos.index'));
    }

    /**
     * Display the specified Hecho.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $hecho = $this->hechoRepository->findWithoutFail($id);

        if (empty($hecho)) {
            Flash::error('Hecho not found');

            return redirect(route('hechos.index'));
        }

        return view('hechos.show')->with('hecho', $hecho);
    }

    /**
     * Show the form for editing the specified Hecho.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $hecho = $this->hechoRepository->findWithoutFail($id);

        if (empty($hecho)) {
            Flash::error('Hecho not found');

            return redirect(route('hechos.index'));
        }

        return view('hechos.edit')->with('hecho', $hecho);
    }

    /**
     * Update the specified Hecho in storage.
     *
     * @param  int              $id
     * @param UpdateHechoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHechoRequest $request)
    {
        $hecho = $this->hechoRepository->findWithoutFail($id);

        if (empty($hecho)) {
            Flash::error('Hecho not found');

            return redirect(route('hechos.index'));
        }

        $hecho = $this->hechoRepository->update($request->all(), $id);

        Flash::success('Hecho updated successfully.');

        return redirect(route('hechos.index'));
    }

    /**
     * Remove the specified Hecho from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $hecho = $this->hechoRepository->findWithoutFail($id);

        if (empty($hecho)) {
            Flash::error('Hecho not found');

            return redirect(route('hechos.index'));
        }

        $this->hechoRepository->delete($id);

        Flash::success('Hecho deleted successfully.');

        return redirect(route('hechos.index'));
    }
}
