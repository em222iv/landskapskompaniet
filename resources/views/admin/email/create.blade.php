@extends('......app')
@section('content')
    <section>
         <div id="table-row" class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
               <a href="{{route('admin.email.index')}}" ><div class="btn btn-primary">Se Emailadresser</div></a>
              <h1>Skriv ett mail</h1>
              {!! Form::open(['url'=>'admin/email', 'files' => true]) !!}
                @include('admin.email.partials.form',['submitButton' => 'Skicka'])
              {!! Form::close() !!}
            </div>
        </div>
    </section>
@stop
@section('footer')
    <script>
        var tag = $('#email-form');
    </script>
@endsection