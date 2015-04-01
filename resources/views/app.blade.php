<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>
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
        <div class="container">
            <nav class="navbar navbar navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="true" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <a class="navbar-brand"  href="/">Landskapskompaniet</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse in" aria-expanded="true">
                        <ul class="nav navbar-nav navbar-inner" >
                            <li><a href="/">Hem</a></li>
                            <li class="dropdown">
                             <a href="/tjanster" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tjänster <span class="caret"></span></a>
                             <ul class="dropdown-menu" role="menu">
                                 <li><a href="/tjanster">Överblick</a></li>
                                 <li class="divider"></li>
                                 <li class="dropdown-header">Tjänster</li>
                                 <li><a href="/tradvard">Skog</a></li>
                                 <li><a href="/trad">Träd</a></li>
                                 <li><a href="/gras">Gräs</a></li>
                                 <li><a href="/sjo">Sjö</a></li>
                                 <li class="divider"></li>
                                 <li class="dropdown-header">Vinter</li>
                                 <li><a href="/plogning">Plogning</a></li>
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
                            <li><a href="/Kontakta">Kontakta oss</a></li>
                            <li><a href="/landskapskompaniet">Om Landskapskompaniet</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
	@yield('content')
<!-- FOOTER -->
<footer>
    <div class="container">
        <a class="back-to-top" style="display: inline;" href="#"><span class="glyphicon glyphicon-circle-arrow-up"></span></a>
        <p>© Landskapskompaniet · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    </div>
</footer>
	<!-- Scripts -->
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="{{ asset('/css/js/ripples.js') }}"></script>
<script>$.material.init()</script>
<script>
    jQuery(document).ready(function() {
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
