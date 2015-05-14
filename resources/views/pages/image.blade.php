@extends('app')
@section('head')
    <link href="{{ asset('/css/image.css') }}" rel="stylesheet">
@endsection
@section('gallery-picture')
    class="full"
@endsection

@section('content')
<style>/*Image sidan css*/
         {{--.full {--}}
           {{--background: url("/{{$images[0]->img}}") no-repeat center center fixed;--}}

       {{--}--}}
</style>

<section>
<div id="image-container" class="container ">
        <div class="row">
            <div id="image-text" class="col-md-6 col-sm-12">
                <h1>{{$images[0]->title}}</h1>
                <p>{{$images[0]->text}}</p>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="/galleri/{{$images[1]->id}}" role="button" data-slide="prev">
           <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
       </a>
       <a class="right carousel-control" href="/galleri/{{$images[2]->id}}" role="button" data-slide="next">
           <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
       </a>
</section>
@endsection
@section('footer')
    <script>
           $('.full').css('background','url(/{{$images[0]->img}}) no-repeat center center fixed');
    </script>
@endsection