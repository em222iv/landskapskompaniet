@extends('...app')
@section('content')
<section>
     <div class="row">
      <a href="/auth/logout" class="btn btn-fab btn-warning">Logout</a>
        <div class="col-md-6 col-md-offset-3 text-center">
          <h1>inloggad</h1>
          <a href="/carousels">Carousels</a>

        </div>
    </div>
</section>
@stop