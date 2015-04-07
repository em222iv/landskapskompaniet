@extends('...app')
@section('content')

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    @foreach($carousels as $carousel)
        <li data-target="#myCarousel" data-slide-to="{{$carousel->id}}" class=""></li>
    @endforeach
    </ol>
    <div class="carousel-inner" role="listbox">
    <div class="item active">
                <img class="third-slide" src="https://scontent-ams.xx.fbcdn.net/hphotos-xpa1/v/t1.0-9/1385694_791956437536235_7355088129082629807_n.jpg?oh=ef76a6f22565350de02866b22479e203&oe=55A1E750" alt="Slide 0">

                <div class="container">
                    <div class="carousel-caption">
                        <h1>ALLTID FÖRST</h1>
                        <p>Presentation alltid först</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                    </div>
                </div>
            </div>
     @foreach($carousels as $carousel)
        <div class="item">
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
            <p><a class="btn btn-default" href="#" role="button">Kontakta här »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <?php
            // Supply a user id and an access token
            $userid = "1459532749";
            $accessToken = "1459532749.ab103e5.4e9c9b38a54145338fc7263289159c95";

            // Gets our data
            function fetchData($url){
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_TIMEOUT, 20);
                $result = curl_exec($ch);
                curl_close($ch);
                return $result;
            }

            // Pulls and parses data.
            $result = fetchData("https://api.instagram.com/v1/users/{$userid}/media/recent/?access_token={$accessToken}");
            $result = json_decode($result);
            ?>


            <?php foreach ($result->data as $post): ?>
            <!-- Renders images. @Options (thumbnail,low_resoulution, high_resolution) -->
            <a class="group" rel="group1" href="<?= $post->images->standard_resolution->url ?>"><img class="img-circle" alt="Generic placeholder image" width="140" height="140" src="<?= $post->images->thumbnail->url ?>"></a>

            <?php break ?>
            <?php endforeach ?>
           {{-- <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            --}}<h2>Instagram</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-default" href="#" role="button">Vår Instagram »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Facebook</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-default" href="#" role="button">Facebook-sida »</a></p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
</div>

@endsection
