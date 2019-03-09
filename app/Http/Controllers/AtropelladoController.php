<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAtropelladoRequest;
use App\Http\Requests\UpdateAtropelladoRequest;
use App\Repositories\AtropelladoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AtropelladoController extends AppBaseController
{
    /** @var  AtropelladoRepository */
    private $atropelladoRepository;

    public function __construct(AtropelladoRepository $atropelladoRepo)
    {
        $this->atropelladoRepository = $atropelladoRepo;
    }

    /**
     * Display a listing of the Atropellado.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->atropelladoRepository->pushCriteria(new RequestCriteria($request));
        $atropellados = $this->atropelladoRepository->all();

        return view('atropellados.index')
            ->with('atropellados', $atropellados);
    }

    /**
     * Show the form for creating a new Atropellado.
     *
     * @return Response
     */
    public function create()
    {
        return view('atropellados.create');
    }

    /**
     * Store a newly created Atropellado in storage.
     *
     * @param CreateAtropelladoRequest $request
     *
     * @return Response
     */
    public function store(CreateAtropelladoRequest $request)
    {
        $input = $request->all();

        $atropellado = $this->atropelladoRepository->create($input);

        Flash::success('Atropellado saved successfully.');

        return redirect(route('atropellados.index'));
    }

    /**
     * Display the specified Atropellado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $atropellado = $this->atropelladoRepository->findWithoutFail($id);

        if (empty($atropellado)) {
            Flash::error('Atropellado not found');

            return redirect(route('atropellados.index'));
        }

        return view('atropellados.show')->with('atropellado', $atropellado);
    }

    /**
     * Show the form for editing the specified Atropellado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $atropellado = $this->atropelladoRepository->findWithoutFail($id);

        if (empty($atropellado)) {
            Flash::error('Atropellado not found');

            return redirect(route('atropellados.index'));
        }

        return view('atropellados.edit')->with('atropellado', $atropellado);
    }

    /**
     * Update the specified Atropellado in storage.
     *
     * @param  int              $id
     * @param UpdateAtropelladoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAtropelladoRequest $request)
    {
        $atropellado = $this->atropelladoRepository->findWithoutFail($id);

        if (empty($atropellado)) {
            Flash::error('Atropellado not found');

            return redirect(route('atropellados.index'));
        }

        $atropellado = $this->atropelladoRepository->update($request->all(), $id);

        Flash::success('Atropellado updated successfully.');

        return redirect(route('atropellados.index'));
    }

    /**
     * Remove the specified Atropellado from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $atropellado = $this->atropelladoRepository->findWithoutFail($id);

        if (empty($atropellado)) {
            Flash::error('Atropellado not found');

            return redirect(route('atropellados.index'));
        }

        $this->atropelladoRepository->delete($id);

        Flash::success('Atropellado deleted successfully.');

        return redirect(route('atropellados.index'));
    }
}
