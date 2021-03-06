@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Hecho
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($hecho, ['route' => ['hechos.update', $hecho->id], 'method' => 'patch']) !!}

                        @include('hechos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection