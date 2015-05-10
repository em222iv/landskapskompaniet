<!DOCTYPE html>
<html class="full" lang="en">
<head>
    {{--<link rel="icon"--}}
      {{--type="image/png"--}}
      {{--href="{{ asset('/img/aa929c2e3d896ba28c96432a58ab6fb9.ico/android-icon-36x36.png') }}">--}}
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <META NAME="description" CONTENT="Träd, grönytor och snöröjning! Våra proffesionella Arborister och Greenkeepers hjälper kommuner, kyrkor och privata kunder med deras landskapsvisioner!">
    <META NAME="keywords" CONTENT="landskapskompaniet,träd,tree,arborist,plog,snö,plogning,träfällning,trädtjänster">
	<title>Landskapskompaniet</title>
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/landskap.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/ripples.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/material.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/select2.min.css') }}" rel="stylesheet">

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
                        <a class="navbar-brand" id="brand" href="/hem">Landskapskompaniet</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse" aria-expanded="true">
                        <ul class="nav navbar-nav navbar-inner">
                            <li><a href="/kontakt">Kontakta oss</a></li>
                            <li><a href="/galleri">Galleri</a></li>
                            <li><a href="/tjänster">Tjänster</a></li>
                            <li><a href="/landskapskompaniet">Om oss</a></li>
                        </ul>
                        <div class="menu-social">
                            @include('_partials.socialButtons')
                        </div>
                        @include('_partials.breadcrumbs')
                    </div>
                </div>
            </nav>
             <div class="form-actions">
                <a href="{{ URL::previous() }}"><div class="icon-preview"><i id="prev-button"  class="mdi-av-skip-previous"></i></div></a>
                @if(Auth::check())
                    <a href="/admin"><div class="icon-preview"><i id="admin-button"  class="mdi-navigation-apps"></i></div></a>
                @endif

            </div>
        </div>
    </div>

	@yield('content')
    <footer class="footer-distributed">

    			<div class="footer-left">

    				<h4>LANDSKAPSKOMPANIET AB</h4>

    				<p class="footer-links">
    					<a href="#">Hem</a>
    					·
    					<a href="#">Tjänster</a>
    					·
    					<a href="#">Galleri</a>
    					·
    					<a href="#">Kontakta oss</a>
    					·
    					<a href="#">Om oss</a>

    				</p>

    				<p class="footer-company-name">Landkspaskompaniet © 2015</p>
    			</div>

    			<div class="footer-center">

    				<div>
    					<i class="mdi-communication-business"></i>
    					<p><span>Råbyvägen 28</span>76172, Norrtälje</p>
    				</div>

    				<div>
    					<i class="mdi-communication-phone"></i>
    					<p>Telefon: <a href="tel:+1-303-499-7111">00736511977</a></p>
    				</div>

    				<div>
    					<i class="mdi-communication-email"></i>
    					<p>E-mail: <a href="mailto:webmaster@example.com">landskapskompaniet@gmail.com</a></p>
    				</div>

    			</div>

    			<div class="footer-right">

    				<p class="footer-company-about">
    					<div id="footer-contact-header">Kontakta oss</div><p>@include('_partials.contactButtons')</p>

    				</p>

    				<div class="footer-icons">


                       @include('_partials.socialButtons')

    				</div>
    			</div>
    		</footer>


<a class="back-to-top" style="display: inline;" href="#"><div class="glyphicon glyphicon-circle-arrow-up"></div></a>
	<!-- Scripts -->

    {{--<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>--}}
    <script src="http://code.jquery.com/jquery.js"></script>

       <script src="{{ asset('/js/select2.min.js') }}"></script>

        <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script>
        $(function() {
            $.material.init();
        });
    </script>
    <script src="{{ asset('/bootstrap-material-design-master/dist/js/ripples.min.js') }}"></script>
    <script src="/bootstrap-material-design-master/dist/js/material.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></script>
    <script src="{{ asset('/js/scroll-up-button.js') }}"></script>

@yield('footer')
</body>
<!-- FOOTER -->

</html>
