<table class="table table-responsive" id="hechos-table">
    <thead>
        <tr>
            <th>Id</th>
        <th>Fecha</th>
        <th>Mes</th>
        <th>Hora</th>
        <th>Servicio</th>
        <th>Tipo</th>
        <th>Modo</th>
        <th>Estado</th>
        <th>Calle Uno</th>
        <th>Calle Dos</th>
        <th>No Dom</th>
        <th>Colonia</th>
        <th>Conductores Heridos</th>
        <th>Pasajeros Heridos</th>
        <th>Peatones Heridos</th>
        <th>Conductores Muertos</th>
        <th>Pasajeros Muertos</th>
        <th>Peatones Muertos</th>
        <th>Sexo</th>
        <th>Tipo Enervante</th>
        <th>Ruta</th>
        <th>Unidad</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($hechos as $hecho)
        <tr>
            <td>{!! $hecho->ID !!}</td>
            <td>{!! $hecho->Fecha !!}</td>
            <td>{!! $hecho->Mes !!}</td>
            <td>{!! $hecho->Hora !!}</td>
            <td>{!! $hecho->Servicio !!}</td>
            <td>{!! $hecho->Tipo !!}</td>
            <td>{!! $hecho->Modo !!}</td>
            <td>{!! $hecho->Estado !!}</td>
            <td>{!! $hecho->Calle_uno !!}</td>
            <td>{!! $hecho->Calle_dos !!}</td>
            <td>{!! $hecho->No_dom !!}</td>
            <td>{!! $hecho->Colonia !!}</td>
            <td>{!! $hecho->Conductores_heridos !!}</td>
            <td>{!! $hecho->Pasajeros_heridos !!}</td>
            <td>{!! $hecho->Peatones_heridos !!}</td>
            <td>{!! $hecho->Conductores_muertos !!}</td>
            <td>{!! $hecho->Pasajeros_muertos !!}</td>
            <td>{!! $hecho->Peatones_muertos !!}</td>
            <td>{!! $hecho->Sexo !!}</td>
            <td>{!! $hecho->Tipo_enervante !!}</td>
            <td>{!! $hecho->Ruta !!}</td>
            <td>{!! $hecho->Unidad !!}</td>
            <td>
                {!! Form::open(['route' => ['hechos.destroy', $hecho->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('hechos.show', [$hecho->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('hechos.edit', [$hecho->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>