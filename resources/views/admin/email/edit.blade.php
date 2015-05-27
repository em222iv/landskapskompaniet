@extends('......app')
@section('content')
    <section>
     <div id="table-row" class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                  <h1>Uppdatera: {{$carousel->title}}</h1>
                  {!! Form::model($carousel,['method'=>'PATCH', 'action' => ['Admin\CarouselController@update', $carousel->id],'files' => true]) !!}
                     @include('admin.carousel.partials.form',['submitButton' => 'Uppdatera'])
                  {!! Form::close() !!}
                @include('errors.errorlist')
                </div>
            </div>
    </section>
@stop