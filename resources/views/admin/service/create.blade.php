@extends('......app')
@section('content')
    <section>
     <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                  <h1>Skapa en Tjänst</h1>
                  {!! Form::open(['url'=>'admin/service', 'files' => true]) !!}
                    @include('admin.service.partials.form',['submitButton' => 'Skapa'])
                  {!! Form::close() !!}
                  @include('errors.errorlist')
                </div>
            </div>
    </section>
@stop