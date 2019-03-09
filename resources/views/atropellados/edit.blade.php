@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Atropellado
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($atropellado, ['route' => ['atropellados.update', $atropellado->id], 'method' => 'patch']) !!}

                        @include('atropellados.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection