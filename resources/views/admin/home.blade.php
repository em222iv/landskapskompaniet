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
</section>
@stop