@extends('...app')
@section('content')

<div id="myCarousel" class="carousel slide" data-ride="carousel">

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
           <img class="slide-image" src="{{ $carousel['img-path'] }}" alt="Slide {{$carousel->id}}">
           <div class="container">
               <div class="carousel-caption">
                   <h1>{{ $carousel->title }}</h1>
                   <p>{{$carousel->body}}</p>
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
</div>

<div id="introduction-container" class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h3 class="section-heading">Landskapskompaniet</h3>
            <h4 class="section-subheading text-muted"><p>Vi hjälper er med träd, skog och grönytor</p></h4>
        </div>
    </div>
    <hr>
</div>
<div class="container marketing">
<!-- Three columns of text below the carousel -->
    <div class="row">
        <div id="welcome-contact-content" class="col-lg-4">
         @include('_partials.contactButtons')
            <h2>Kontakta oss</h2>
            <p>Träd, grönytor och snöröjning! Våra proffesionella Arborister och Greenkeepers hjälper kommuner, kyrkor och privata kunder med deras landskapsvisioner!</p>

        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <a href="https://www.facebook.com/landskapskompaniet?fref=ts"><img id="facebook-picture" class="img-circle" src="" width="140" height="140"></a>
            <h2>Facebook</h2>
            <p id="faceboook-message"></p>
            <div class="fb-like" data-href="https://www.facebook.com/landskapskompaniet?fref=ts" data-width="100" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
           {{-- <p><a class="btn btn-default" href="#" role="button">Facebook-sida »</a></p>--}}
        </div>
        <div class="col-lg-4">
            <a class="group" rel="group1" href="https://instagram.com/explore/tags/landskapskompaniet/"><img class="img-circle" alt="Generic placeholder image" width="140" height="140" src="{{$data['instaimg']}}"></a>
                <h2>Instagram</h2>
                <p>{{$data['instatext']}}</p>

        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
</div>
<div id="fb-root"></div>
<script src="{{ asset('/js/fb-feed.js') }}"></script>
@endsection
