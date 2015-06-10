@extends('......app')
@section('content')
    <section>
     <div id="table-row" class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                  <h1>Skapa en Tjänst</h1>
                  {!! Form::open(['url'=>'admin/service', 'files' => true]) !!}
                    @include('admin.service.partials.form',['submitButton' => 'Skapa'])
                  {!! Form::close() !!}
                </div>
            </div>
    </section>
@stop