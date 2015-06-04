@extends('...app')
@section('content')
<section>
     <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
            <h1>inloggad</h1>
            <a href="{{route('register')}}" class="btn btn-primary btn-success">Ny användare</a>
            <a href="/auth/logout" class="btn btn-primary btn-warning">Logga ut</a><hr>
            <a href="{{route('admin.carousels.index')}}" class="btn btn-flat btn-success">Slider</a>
            <a href="{{route('admin.gallery.index')}}" class="btn btn-flat btn-info">Galleri</a>
            <a href="{{route('admin.service.index')}}" class="btn btn-flat btn-primary">Tjänster</a>
            <a href="{{route('admin.subservice.index')}}" class="btn btn-flat btn-default">Deltjänster</a>
            <a href="{{route('admin.email.create')}}" class="btn btn-flat btn-default">Email</a>
       </div>
     </div>
</section>
@endsection