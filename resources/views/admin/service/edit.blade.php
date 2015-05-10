@extends('......app')
@section('content')
    <section>
        <div id="table-row" class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <h1>Uppdatera: {{$service->title}}</h1>
                {!! Form::model($service,['method'=>'PATCH', 'action' => ['Admin\AdminServiceController@update', $service->id],'files' => true]) !!}
                    @include('admin.service.partials.form',['submitButton' => 'Uppdatera','service'=>$service])
                {!! Form::close() !!}
                @include('errors.errorlist')
            </div>
        </div>
    </section>
@stop