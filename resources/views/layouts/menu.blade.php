<li class="{{ Request::is('hechos*') ? 'active' : '' }}">
    <a href="{!! route('hechos.index') !!}"><i class="fa fa-edit"></i><span>Hechos</span></a>
</li>

<li class="{{ Request::is('atropellados*') ? 'active' : '' }}">
    <a href="{!! route('atropellados.index') !!}"><i class="fa fa-edit"></i><span>Atropellados</span></a>
</li>

