<!DOCTYPE html>
<html class="full" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Landskapskompaniet</title>
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/caoursel.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/landskap.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/agency.css') }}" rel="stylesheet">
    <!--<link href="{{ asset('/css/css/ripples.css') }}" rel="stylesheet">-->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.2.1/css/material.min.css" />
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
    <div class="navbar-wrapper">
        <div class="container" id="nav-container">
            <nav class="navbar navbar navbar-static-top">
                <div class="container">
                    <div class="navbar-header">

                        @if(Auth::check())
                        <a class="navbar-brand"  href="/admin">Landskapskompaniet</a>
                        @else
                        <a class="navbar-brand"  href="/home">Landskapskompaniet</a>
                        @endif
                    </div>
                    <div id="navbar" class="navbar-collapse collapse" aria-expanded="true">
                        <ul class="nav navbar-nav navbar-inner">
                            <li><a href="/hem">Hem</a></li>
                            <li class="dropdown">
                             <a href="/tjänster" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tjänster <span class="caret"></span></a>
                             <ul class="dropdown-menu" role="menu">
                                 <li><a href="/tjänster">Överblick</a></li>
                                 <li class="divider"></li>
                                  @foreach($services as $service)
                                     <li><a href="/tjänster/{{$service->title}}">{{$service->title}}</a></li>
                                 @endforeach
                             </ul>
                         </li>
                            <li class="dropdown">
                            <a href="/socialt" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Socialt <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/galleri">Galleri</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Nätverk</li>
                                <li><a href="https://www.facebook.com/landskapskompaniet?fref=ts">Facebook-sida</a></li>
                                <li><a href="https://instagram.com/explore/tags/landskapskompaniet/">Instagram</a></li>
                                <li><a href="/gras">Youtube-kanal</a></li>
                            </ul>
                            <li><a href="/kontakt">Kontakta oss</a></li>
                            <li><a href="/landskapskompaniet">Om Landskapskompaniet</a></li>

                        </ul>
                    {{--    @include('_partials.breadcrumbs')--}}
                    </div>
                </div>
            </nav>
        </div>
    </div>
	@yield('content')
<!-- FOOTER -->
<footer>
   <div class="container">
       <div class="row">
            <div class="col-lg-6">
              <ul class="list-inline ">
                  <li>
                      <p>Telefon :<a href="tel:+1-303-499-7111">070 43 49 123</a></p>
                  </li>
                  <li class="footer-menu-divider">⋅</li>
                  <li>
                      <p>E-mail :<a href="mailto:webmaster@example.com">Carl@Landskapskompaniet.se</a></p>
                  </li>
              </ul>
               <ul class="list-inline social-buttons">
                  <li>
                    <a href="tel:+1-303-499-7111" class="btn btn-fab btn-raised btn-material-blue pull-left"><i class="mdi-communication-phone"></i></a>
                  </li>
                  <li>
                     <a href="mailto:webmaster@example.com" class="btn btn-fab btn-primary pull-left"><i class="mdi-communication-email"></i></a>
                  </li>
              </ul>
          </div>
          <div class="col-lg-6">
           <ul class="list-inline ">
               <li>
                   <p><a href="#">F-skatt</a></p>
               </li>
               <li class="footer-menu-divider">⋅</li>
               <li>
                    <p><a href="#">F-skatt</a></p>
               </li>
               <li class="footer-menu-divider">⋅</li>
               <li>
                   <p><a href="#">F-skatt</a></p>
               </li>
               <li class="footer-menu-divider">⋅</li>
               <li>
                    <p><a href="#">F-skatt</a></p>
               </li>
           </ul>
           <ul class="list-inline social-buttons">
              <li>
                <a href="#"><i class="fa fa-twitter"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-facebook"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-linkedin"></i></a>
              </li>
          </ul>


            {{-- <ul class="list-inline social-buttons">
                 <li>
                     <a href="#"><button class="btn btn-fab btn-raised btn-primary pull-left"><i class="mdi-communication-email"></i></button></a>
                 </li>
                 <li class="footer-menu-divider">⋅</li>
                 <li>
                     <a href="#about"> <button class="btn btn-fab btn-raised btn-material-blue pull-left"><i class="mdi-communication-phone"></i></button></a>
                 </li>
                 <li class="footer-menu-divider">⋅</li>
             </ul>--}}
          </div>
       </div>
       <div class="row">
 <p class="copyright text-muted small">Copyright © Landskapskompaniet. All Rights Reserved</p>
       </div>
   </div>
</footer>
<a class="back-to-top" style="display: inline;" href="#"><span class="glyphicon glyphicon-circle-arrow-up"></span></a>
	<!-- Scripts -->
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="{{ asset('/css/js/ripples.js') }}"></script>
<script>$.material.init()</script>
<script>

    jQuery(document).ready(function() {
     $("div.navbar").attr("aria-expanded","false");
        var offset = 250;
        var duration = 300;

        jQuery(window).scroll(function() {

            if (jQuery(this).scrollTop() > offset) {

                jQuery('.back-to-top').fadeIn(duration);
            }
            else {
                jQuery('.back-to-top').fadeOut(duration);
            }
        });
        jQuery('.back-to-top').click(function(event) {
            event.preventDefault();
            jQuery('html, body').animate({scrollTop: 0}, duration);
            return false;
        })
    });
</script>
<script>

</script>
</body>
</html>
