@extends('......app')
@section('content')
    <section>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <h1>Uppdatera: {{$service->title}}</h1>
                {!! Form::model($service,['method'=>'PATCH', 'action' => ['Admin\AdminServiceController@update', $service->id],'files' => true]) !!}
                @include('admin.service.partials.form',['submitButton' => 'Skapa'])
                {!! Form::close() !!}

                @include('errors.errorlist')
            </div>
        </div>
    </section>
@stop