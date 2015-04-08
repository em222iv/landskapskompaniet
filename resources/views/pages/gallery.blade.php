@extends('app')
@section('content')
<section id="gallery">
    <div class="container">
        <div class="row">
            @foreach($images as $image)
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                     <a class="thumbnail" href="/gallery/{{$image->id}}">
                         <img class="img-responsive gallery" src="{{$image->image}}" alt="">
                     </a>
                 </div>
            @endforeach
        </div>
    </div>
</section>
@endsection