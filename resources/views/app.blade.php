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
                        <div class="menu-social">
                            @include('_partials.socialButtons')
                        </div>
                        @include('_partials.breadcrumbs')
                    </div>
                </div>
            </nav>
        </div>
    </div>

	@yield('content')
<!-- FOOTER -->
<footer class="footer-distributed">

			<div class="footer-left">

				<h4>Landskapskompaniet</h4>

				<p class="footer-links">
					<a href="#">Hem</a>
					·
					<a href="#">Tjänster</a>
					·
					<a href="#">Galleri</a>
					·
					<a href="#">Kontakta oss</a>
					·
					<a href="#">Om landskapskompaniet</a>

				</p>

				<p class="footer-company-name">Landkspaskompaniet © 2015</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="mdi-communication-business"></i>
					<p><span>I skogen</span> Lohärad, Norrtälje</p>
				</div>

				<div>
					<i class="mdi-communication-phone"></i>
					<p>Telefon :<a href="tel:+1-303-499-7111">070 43 49 123</a></p>
				</div>

				<div>
					<i class="mdi-communication-email"></i>
					<p>E-mail :<a href="mailto:webmaster@example.com">Carl@Landskapskompaniet.se</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>Om oss</span><p>hehefe</p>

				</p>

				<div class="footer-icons">

                   @include('_partials.socialButtons')

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

</body>
</html>
