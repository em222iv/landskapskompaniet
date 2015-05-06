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
           <img class="slide-image" src="{{ $carousel['img-path'] }}" alt="Slide {{$carousel->id}}">
           <div class="container">
               <div class="carousel-caption">
                   <h1>{{ $carousel->title }}</h1>
                   <p>{{$carousel->body}}</p>
                  {{-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Kontakta oss!</a></p>--}}
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
            <h4 class="section-subheading text-muted">Vi hjälper dig med träd, skog, plogning och allahanda tjänster</h4>
        </div>
    </div>
    <hr>
</div>
<div class="container marketing">
<!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-4">
         @include('_partials.contactButtons')
            <h2>Kontakta oss</h2>
            <p>Träd, grönytor och snöröjning! Våra proffesionella Arborister och Greenkeepers hjälper kommuner, kyrkor och privata kunder med deras landskapsvisioner!</p>
           {{-- <p><a class="btn btn-default" href="/contact" role="button">Kontakta här »</a></p>--}}
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
           {{-- <p><a class="btn btn-default" href="#" role="button">Vår Instagram »</a></p>--}}
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
</div>


<table >
<tr ><th colspan=2 bgcolor=white>Server Software:</th><td colspan=2 bgcolor=white></td></tr>
<tr ><th colspan=2 bgcolor=white>Server Hostname:</th><td colspan=2 bgcolor=white>localhost</td></tr>
<tr ><th colspan=2 bgcolor=white>Server Port:</th><td colspan=2 bgcolor=white>8000</td></tr>
<tr ><th colspan=2 bgcolor=white>Document Path:</th><td colspan=2 bgcolor=white>/</td></tr>
<tr ><th colspan=2 bgcolor=white>Document Length:</th><td colspan=2 bgcolor=white>11614 bytes</td></tr>
<tr ><th colspan=2 bgcolor=white>Concurrency Level:</th><td colspan=2 bgcolor=white>10</td></tr>
<tr ><th colspan=2 bgcolor=white>Time taken for tests:</th><td colspan=2 bgcolor=white>25.560 seconds</td></tr>
<tr ><th colspan=2 bgcolor=white>Complete requests:</th><td colspan=2 bgcolor=white>50</td></tr>
<tr ><th colspan=2 bgcolor=white>Failed requests:</th><td colspan=2 bgcolor=white>0</td></tr>
<tr ><th colspan=2 bgcolor=white>Total transferred:</th><td colspan=2 bgcolor=white>629646 bytes</td></tr>
<tr ><th colspan=2 bgcolor=white>HTML transferred:</th><td colspan=2 bgcolor=white>580700 bytes</td></tr>
<tr ><th colspan=2 bgcolor=white>Requests per second:</th><td colspan=2 bgcolor=white>1.96</td></tr>
<tr ><th colspan=2 bgcolor=white>Transfer rate:</th><td colspan=2 bgcolor=white>24.06 kb/s received</td></tr>
<tr ><th bgcolor=white colspan=4>Connnection Times (ms)</th></tr>
<tr ><th bgcolor=white>&nbsp;</th> <th bgcolor=white>min</th>   <th bgcolor=white>avg</th>   <th bgcolor=white>max</th></tr>
<tr ><th bgcolor=white>Connect:</th><td bgcolor=white>    0</td><td bgcolor=white>    0</td><td bgcolor=white>    0</td></tr>
<tr ><th bgcolor=white>Processing:</th><td bgcolor=white>  597</td><td bgcolor=white> 4648</td><td bgcolor=white> 5354</td></tr>
<tr ><th bgcolor=white>Total:</th><td bgcolor=white>  597</td><td bgcolor=white> 4648</td><td bgcolor=white> 5354</td></tr>
</table>
   <div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '1584087028510603',
            xfbml      : true,
            version    : 'v2.3'
        });
        if (typeof facebookInit == 'function') {
            facebookInit();
        }
    };
    function facebookInit() {
        FB.getLoginStatus(function(response) {
            if (response.status === 'connected') {
                FB.api(
                    "/landskapskompaniet/feed",
                    function (response) {
                        if (response && !response.error) {
                            console.log(response['data'][0]);
                            var img = document.getElementById('facebook-picture');
                            var msg = document.getElementById('faceboook-message');
                            console.log(msg);
                            img.src=response['data'][0]['picture'];
                            msg.innerText=response['data'][0]['message'];
                        }
                    }
                );
            }
            else {
                FB.login();
            }
        });
    }
    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<div id="fb-root"></div>
@endsection
