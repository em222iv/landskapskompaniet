@extends('app')
@section('content')
<section id="gallery">
    <div class="container">
        <div class="row">

              <div class="col-lg-12 text-center">
                  <h3 class="section-heading">Landskapskompaniet</h3>
                  <h3 class="section-subheading text-muted">Galleriet med en härligt sofistikerad bladnind av utsökta bilder</h3>
              </div>

            @foreach($images as $image)
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                     <a class="thumbnail" href="/galleri/{{$image->id}}">
                         <img class="img-responsive gallery gallery-picture" src="{{$image->image}}" alt="">
                     </a>
                 </div>
            @endforeach
        </div>
    </div>
</section>
@endsection