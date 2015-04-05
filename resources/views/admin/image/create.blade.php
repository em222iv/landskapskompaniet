@extends('......app')
@section('content')
    <section>
     <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                  <h1>Lägg till bild</h1>
                  {!! Form::open(['url'=>'carousels']) !!}
                    @include('admin.image.partials.form',['submitButton' => 'Skapa'])
                  {!! Form::close() !!}
                  @include('errors.errorlist')
                </div>
            </div>
    </section>
@stop