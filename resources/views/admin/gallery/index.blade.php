@extends('......app')

@section('content')
<section>
     <div id="table-row" class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
        <a href="gallery/create" ><div class="btn btn-primary">Lägg till bild</div></a>
            @foreach($images as $image)
             <div class="col-md-12">

                 <div class="panel panel-default" style="background-image: url('{{$image->image}}');background-repeat:no-repeat">
                     <a href="/admin/gallery/{{ $image->id }}/edit"><div id="gallery-panel-body" class="panel-body">
                        <h4>{{$image->title}}</h4>
                         <div class="gallery-item-body contain-text"><p>m{{$image->body}}</p></div>
                          {!! Form::open(array('url' => 'admin/gallery/' . $image->id, 'class' => 'pull-right')) !!}
                             {!! Form::hidden('_method', 'DELETE')!!}
                             {!! Form::submit('Ta bort bild', array('class' => 'btn btn-warning')) !!}
                          {!! Form::close() !!}
                     </div></a>
                 </div>
             </div>
            @endforeach
        </div>
    </div>
</section>

@stop