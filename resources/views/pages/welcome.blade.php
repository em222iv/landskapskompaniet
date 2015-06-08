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
           <img class="slide-image" src="{{$carousel->img}}" alt="Slide {{$carousel->id}}">
           <div class="container">
               <div class="carousel-caption">
                   <h1>{{ $carousel->title }}</h1>
                   <p>{{$carousel->text}}</p>
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
    <div class="row">
        <div id="welcome-contact-content" class="col-lg-4">
         @include('_partials.contactButtons')
            <h2>Kontakta oss</h2>
            <p>Träd, grönytor och snöröjning! Våra proffesionella Arborister och Greenkeepers hjälper kommuner, kyrkor och privata kunder med deras landskapsvisioner!</p>
        </div>
        <div class="col-lg-4">
            <a href="https://www.facebook.com/landskapskompaniet?fref=ts"><img id="facebook-picture" class="img-circle" src=""></a>
            <h2>Facebook</h2>
            <p id="faceboook-message"></p>
            <div class="fb-like" data-href="https://www.facebook.com/landskapskompaniet?fref=ts" data-width="100" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
        </div>
        <div class="col-lg-4">
            <a class="group" rel="group1" href="https://instagram.com/explore/tags/landskapskompaniet/"><img id="instagram-picture" class="img-circle" alt="Generic placeholder image" src=""></a>
            <h2>Instagram</h2>
            <div id="instagram-text"></div>
        </div>
    </div>
</div>
<div class="instagram"></div>
<div id="fb-root"></div>
@endsection
@section('footer')
    <script src="{{ asset('/js/fb-feed.js') }}"></script>
     <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-instagram/0.3.1/instagram.min.js"></script>
     <script src="{{ asset('/js/potomak-insta.min.js') }}"></script>
@endsection


