<!DOCTYPE html>
<html @yield('gallery-picture')  lang="en">
<head>
    <script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "Organization",
          "address": {
            "@type": "PostalAddress",
            "addressLocality": "Norrtälje",
            "postalCode": "76172",
            "streetAddress": "Råbyvägen 28"
          },
          "email": "landskapskompaniet@gmail.com",
          "name": "landskapskompaniet.se",
          "telephone": "00736511977",
          "mainEntityOfPage": "Träd, grönytor och snöröjning! Våra proffesionella Arborister och Greenkeepers hjälper kommuner, kyrkor och privata kunder med deras landskapsvisioner!"
        }
    </script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <META NAME="description" CONTENT="Träd, grönytor och snöröjning! Våra proffesionella Arborister och Greenkeepers hjälper kommuner, kyrkor och privata kunder med deras landskapsvisioner!">
    <META NAME="keywords" CONTENT="landskapskompaniet,träd,tree,arborist,plog,snö,plogning,träfällning,trädtjänster">
	<title>Landskapskompaniet</title>
	 <link rel="shortcut icon" href="{{ asset('/img/favicon/LK-favicon.png') }}" >
	<link href="{{ asset('/css/app.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/landskap.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/ripples.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/material.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/select2.min.css') }}" rel="stylesheet">
    @yield('head')
    <meta name="google-site-verification" content="UK8RloC3F3e0qvKoGlV4VSNSUKN-f78Vikf3w5nLSpo" />
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
                        <a class="navbar-brand" id="brand" href="{{route('home')}}">Landskapskompaniet</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse" aria-expanded="true">
                        <ul class="nav navbar-nav navbar-inner">
                            <li><a href="{{route('contact')}}">Kontakta oss</a></li>
                            <li><a href="{{route('gallery')}}">Galleri</a></li>
                            <li><a href="{{route('services')}}">Tjänster</a></li>
                            <li><a href="{{route('about')}}">Om oss</a></li>
                        </ul>
                        <div class="menu-social">
                            @include('_partials.socialButtons')
                        </div>
                        @include('_partials.breadcrumbs')
                    </div>
                </div>
                <div id="flash-alert">
                     @include('flash::message')
                     @include('errors.errorlist')
                </div>
            </nav>
             <div class="form-actions">
                <a href="{{ URL::previous() }}"><div class="icon-preview"><i id="prev-button"  class="mdi-navigation-chevron-left"></i></div></a>
                @if(Auth::check())
                    <a href="{{route('admin.home')}}"><div class="icon-preview"><i id="admin-button"  class="mdi-navigation-apps"></i></div></a>
                @endif

            </div>
        </div>
    </div>

	@yield('content')

    <footer class="footer-distributed">
    			<div class="footer-left">
    				<h4>LANDSKAPSKOMPANIET AB</h4>
    				<p class="footer-links">
    					<a href="{{route('home')}}">Hem</a>
    					·
    					<a href="{{route('services')}}">Tjänster</a>
    					·
    					<a href="{{route('gallery')}}">Galleri</a>
    					·
    					<a href="{{route('contact')}}">Kontakta oss</a>
    					·
    					<a href="{{route('about')}}">Om oss</a>
    				</p>
    				 {!! Form::open(['url'=>'email', 'files' => true]) !!}
                            <div class="form-group">
                              {!! Form::label('email', 'Skriv upp dig för vårat Nyhetsbrev!') !!}
                              {!! Form::text('email',null,['class'=>'form-control']) !!}
                              {!! Form::submit('skicka',['class'=>'btn btn-primary']) !!}
                           </div>
                      {!! Form::close() !!}
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
<a class="back-to-top" style="display: inline;" href="#"><i class="mdi-navigation-expand-less"></i><div class="ripple-wrapper"></div></a>
	<!-- Scripts -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="{{ asset('/js/select2.min.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script>
        $(function() {
            $.material.init();
        });
    </script>
    <script src="{{ asset('/js/ripples.min.js') }}"></script>
    <script src="{{ asset('/js/material.min.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></script>
    <script src="{{ asset('/js/scroll-up-button.js') }}"></script>
    <script>
        $('div#flash-alert').delay(3000).slideUp(300);
    </script>
@yield('footer')
</body>
<!-- FOOTER -->

</html>
