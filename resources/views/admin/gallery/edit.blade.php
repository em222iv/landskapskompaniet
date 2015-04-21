@extends('......app')
@section('content')
    <section>
         <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                  <h1>Uppdatera: {{$image->title}}</h1>
                  {!! Form::model($image,['method'=>'PATCH', 'action' => ['Admin\AdminGalleryController@update', $image->id],'files' => true]) !!}
                     @include('admin.gallery.partials.form',['submitButton' => 'Skapa'])
                  {!! Form::close() !!}


                    @include('errors.errorlist')
            </div>
        </div>
    </section>
@stop