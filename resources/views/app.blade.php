<!DOCTYPE html>
<html class="full" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <META NAME="description" CONTENT="Landskapskompaniet hjälper den med träd">
    <META NAME="keywords" CONTENT="landskapskompaniet,träd,tree,arborist,plog,plogning,träfällning">
	<title>Landskapskompaniet</title>
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/landskap.css') }}" rel="stylesheet">
    <link href="{{ asset('/bootstrap-material-design-master/dist/css/ripples.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.2.1/css/material.min.css" />
    <!-- Fonts -->
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
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="true" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        @if(Auth::check())
                        <a class="navbar-brand" id="brand" href="/admin">Landskapskompaniet</a>
                        @else
                        <a class="navbar-brand" id="brand" href="/hem">Landskapskompaniet</a>
                        @endif
                    </div>
                    <div id="navbar" class="navbar-collapse collapse" aria-expanded="true">
                        <ul class="nav navbar-nav navbar-inner">
                            <li><a href="/hem">Hem</a></li>
                            <li><a href="/tjänster">Tjänster</a></li>
                            {{--<li class="dropdown">
                             <a href="/tjänster" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tjänster <span class="caret"></span></a>
                             <ul class="dropdown-menu" role="menu">
                                 <li><a href="/tjänster">Överblick</a></li>
                                 <li class="divider"></li>
                                  @foreach($services as $service)
                                     <li><a href="tjänster/{{$service->title}}">{{$service->title}}</a></li>
                                 @endforeach
                             </ul>--}}
                         </li>
                            <li><a href="/galleri">Galleri</a></li>
                            <li><a href="/kontakt">Kontakta oss</a></li>
                            <li><a href="/landskapskompaniet">Om Landskapskompaniet</a></li>

                        </ul>
                        @if(Auth::check())
                            @include('_partials.breadcrumbs')
                        @endif

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
                @include('_partials.contactButtons')
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
          </div>
       </div>
       <div class="row">
 <p class="copyright text-muted small">Copyright © Landskapskompaniet. All Rights Reserved</p>
       </div>
   </div>
</footer>
<a class="back-to-top" style="display: inline;" href="#"><div class="glyphicon glyphicon-circle-arrow-up"></div></a>
	<!-- Scripts -->
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script>
        $(function() {
            $.material.init();
        });
    </script>
    <script src="{{ asset('/bootstrap-material-design-master/dist/js/ripples.js') }}"></script>
    <script src="/bootstrap-material-design-master/dist/js/material.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></script>
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
{{--<script>
//per css-tricks restarting css animations
// http://css-tricks.com/restart-css-animation/
$('.label').id.click(function() {

  // find the first span which is our circle/bubble
  var el = $(this).children('span:first-child');

  // add the bubble class (we do this so it doesnt show on page load)
  el.addClass('circle');

  // clone it
  var newone = el.clone(true);

  // add the cloned version before our original
  el.before(newone);

  // remove the original so that it is ready to run on next click
  $("." + el.attr("class") + ":last").remove();
});
</script>--}}
</body>
</html>
