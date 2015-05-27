@extends('...app')
@section('content')
<section>
     <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
            <h1>inloggad</h1>
            <a href="/auth/register" class="btn btn-primary btn-success">Ny användare</a>
            <a href="/auth/logout" class="btn btn-primary btn-warning">Logga ut</a><hr>
            <a href="/admin/carousels" class="btn btn-flat btn-success">Slider</a>
            <a href="/admin/gallery" class="btn btn-flat btn-info">Galleri</a>
            <a href="/admin/service" class="btn btn-flat btn-primary">Tjänster</a>
            <a href="/admin/subservice" class="btn btn-flat btn-default">Deltjänster</a>
            <a href="/admin/email/create" class="btn btn-flat btn-default">Email</a>
       </div>
     </div>
</section>
@endsection