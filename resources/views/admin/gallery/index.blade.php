@extends('......app')

@section('content')
<section>
     <div id="table-row" class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
        <a href="gallery/create" ><div class="btn btn-primary">Lägg till bild</div></a>
            @foreach($images as $image)
             <div class="col-md-12">
                 <div class="panel panel-default" style="background-image: url('/{{$image->img}}');background-repeat:no-repeat">
                     {!! Form::open(array('url' => 'admin/gallery/' . $image->id, 'class' => 'pull-right')) !!}
                       {!! Form::hidden('_method', 'DELETE')!!}
                       {!! Form::submit('Ta bort bild', array('class' => 'btn btn-warning')) !!}
                    {!! Form::close() !!}
                     <a href="/admin/gallery/{{ $image->id }}/edit"><div id="gallery-panel-body" class="panel-body">
                        <h4>{{$image->title}}</h4>
                    </div>
                     </a>
                 </div>
             </div>
              @include('flash::message')
            @endforeach
        </div>
    </div>
</section>

@stop