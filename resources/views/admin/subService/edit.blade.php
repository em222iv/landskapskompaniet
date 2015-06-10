@extends('......app')
@section('content')
    <section>
        <div id="table-row" class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <h1>Uppdatera: {{$subservice['head-title']}} {{$subservice['sub-title']}}</h1>
                {!! Form::model($subservice,['method'=>'PATCH', 'action' => ['Admin\AdminSubServiceController@update', $subservice->id],'files' => true]) !!}
                    @include('admin.subService.partials.form',['submitButton' => 'Uppdatera','subervice'=>$subservice])
                {!! Form::close() !!}
            </div>
        </div>
    </section>
@stop