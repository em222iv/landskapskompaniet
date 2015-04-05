@extends('...app')
@section('content')
<section>
     <div class="row">
      <a href="/auth/logout" class="btn btn-primary btn-warning">Logout</a>
        <div class="col-md-6 col-md-offset-3 text-center">
          <h1>inloggad</h1>
          <a href="/admin/carousels">Carousels</a>
           <a href="/admin/gallery">Gallery</a>
           <a href="/admin/image">Image</a>
        </div>
    </div>
</section>
@stop