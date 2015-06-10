@extends('......app')
@section('content')
    <section>
         <div id="table-row" class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                  <h1>Uppdatera: {{$image->title}}</h1>
                  {!! Form::model($image,['method'=>'PATCH', 'action' => ['Admin\AdminImageController@update', $image->id],'files' => true]) !!}
                     @include('admin.gallery.partials.form',['submitButton' => 'Uppdatera'])
                  {!! Form::close() !!}
            </div>
        </div>
    </section>
@stop