@extends('......app')

@section('content')
<section>
     <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
        <a href="gallery/create" ><div class="btn btn-primary">Lägg till bild</div></a>
            @foreach($images as $image)
             <div class="col-md-12">
                 <div class="panel panel-default" style="background-image: url('{{$image->image}}');background-repeat:no-repeat">
                     <div id="gallery-panel-body" class="panel-body">
                        <h4><a href="/admin/gallery/{{ $image->id }}/edit">{{$image->title}}</a></h4>
                         <p>m{{$image->body}}</p>
                          {!! Form::open(array('url' => 'admin/gallery/' . $image->id, 'class' => 'pull-right')) !!}
                             {!! Form::hidden('_method', 'DELETE')!!}
                             {!! Form::submit('Ta bort bild', array('class' => 'btn btn-warning')) !!}
                          {!! Form::close() !!}
                     </div>
                 </div>
             </div>
            @endforeach
        </div>
    </div>
</section>

@stop