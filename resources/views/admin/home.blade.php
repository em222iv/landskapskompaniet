@extends('...app')
@section('content')
<section>
     <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
            <h1>inloggad</h1>
            <a href="/auth/register" class="btn btn-primary btn-success">Ny användare</a>
            <a href="/auth/logout" class="btn btn-primary btn-warning">Logga ut</a><hr>
            <a href="/admin/carousels">Carousels</a>
            <a href="/admin/gallery">Gallery</a>
            <a href="/admin/image">Image</a>
       </div>

    </div>
    <div class="row">
        <link rel="stylesheet" href="jquery.fancybox-1.3.4.css" type="text/css">
        <script type='text/javascript' src='jquery.min.js'></script>
        <script type='text/javascript' src='jquery.fancybox-1.3.4.pack.js'></script>
        <script type="text/javascript">
            $(function() {
                $("a.group").fancybox({
                    'nextEffect'	:	'fade',
                    'prevEffect'	:	'fade',
                    'overlayOpacity' :  0.8,
                    'overlayColor' : '#000000',
                    'arrows' : false,
                });
            });
        </script>


    </div>
</section>
@stop