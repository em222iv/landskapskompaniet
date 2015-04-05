@extends('......app')

@section('content')
<section>
     <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
        <a href="carousels/create" ><div class="btn btn-fab btn-primary">Skapa</div></a>
            @foreach($carousels as $carousel)
                <article>
                    <h2>
                        <a href="/carousels/{{ $carousel->id }}/edit">{{$carousel->title}}</a>
                    </h2>
                        <div class="body">{{$carousel->body}}</div>
                        <p>{{$carousel->created_at}}</p>
                </article>

            @endforeach
        </div>

    </div>
</section>

@stop