@extends('...app')
@section('content')

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">

    @foreach($data['carousels'] as $carousel)
        <li data-target="#myCarousel" data-slide-to="{{$carousel->id}}" class=""></li>
    @endforeach
    </ol>
    <div class="carousel-inner" role="listbox">
     @foreach($data['carousels'] as $carousel)
         @if($carousel == $data['carousels'][0])
            <div class="item active">
         @else
            <div class="item">
         @endif
           <img class="first-slide" src="{{ $carousel['img-path'] }}" alt="Slide {{$carousel->id}}">
           <div class="container">
               <div class="carousel-caption">
                   <h1>{{ $carousel->title }}</h1>
                   <p>{{$carousel->body}}</p>
                   <p><a class="btn btn-lg btn-primary" href="#" role="button">Kontakta oss!</a></p>
               </div>
           </div>
        </div>
    @endforeach

    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div id="introduction-container" class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3 class="section-heading">Landskapskompaniet</h3>
                <h4 class="section-subheading text-muted">Vi hjälper dig med träd, skog, plogning och allahanda tjänster</h4>
            </div>
        </div>
        <hr>
    </div>
<div class="container marketing">
<!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-4">
            <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Kontakta oss</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-default" href="/contact" role="button">Kontakta här »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Facebook</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-default" href="#" role="button">Facebook-sida »</a></p>
        </div>
        <div class="col-lg-4">
            <a class="group" rel="group1" href="{{$data['img']}}"><img class="img-circle" alt="Generic placeholder image" width="140" height="140" src="{{$data['img']}}"></a>
                <h2>Instagram</h2>
                <p>{{$data['text']}}</p>
            <p><a class="btn btn-default" href="#" role="button">Vår Instagram »</a></p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
</div>

@endsection
