@extends('......app')
@section('content')
    <section>
     <div id="table-row" class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                  <h1>Skapa en Carousel</h1>
                  {!! Form::open(['url'=>'admin/carousels', 'files' => true]) !!}
                    @include('admin.carousel.partials.form',['submitButton' => 'Skapa'])
                  {!! Form::close() !!}
                </div>
            </div>
    </section>
@stop