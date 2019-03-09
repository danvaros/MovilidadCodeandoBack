<table class="table table-responsive" id="atropellados-table">
    <thead>
        <tr>
            <th>Usuario</th>
        <th>Tuit</th>
        <th>Liga</th>
        <th>Short Url</th>
        <th>Fecha</th>
        <th>Comenatario1</th>
        <th>Comentario2</th>
        <th>Comentario3</th>
        <th>Comentario4</th>
        <th>Comentario5</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($atropellados as $atropellado)
        <tr>
            <td>{!! $atropellado->usuario !!}</td>
            <td>{!! $atropellado->tuit !!}</td>
            <td>{!! $atropellado->liga !!}</td>
            <td>{!! $atropellado->short_url !!}</td>
            <td>{!! $atropellado->fecha !!}</td>
            <td>{!! $atropellado->comenatario1 !!}</td>
            <td>{!! $atropellado->comentario2 !!}</td>
            <td>{!! $atropellado->comentario3 !!}</td>
            <td>{!! $atropellado->comentario4 !!}</td>
            <td>{!! $atropellado->comentario5 !!}</td>
            <td>
                {!! Form::open(['route' => ['atropellados.destroy', $atropellado->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('atropellados.show', [$atropellado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('atropellados.edit', [$atropellado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>