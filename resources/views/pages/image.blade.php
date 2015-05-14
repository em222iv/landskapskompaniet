 @extends('app')
 @section('content')

<style>body {
       	margin-top: 50px;
       	margin-bottom: 50px;
       	background: none;
       }

       .full {
         background: url("{{$images[0]->img}}") no-repeat center center fixed;
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
       }


       #image-text {
       color:white;
       }
       footer {
          background-color: transparent;
       }

       </style>
 <!-- Page Content -->
<section>
<div id="image-container" class="container ">
        <div class="row">
            <div id="image-text" class="col-md-6 col-sm-12">
                <h1>{{$images[0]->title}}</h1>
                <p>{{$images[0]->text}}</p>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <a class="left carousel-control" href="/galleri/{{$images[1]->id}}" role="button" data-slide="prev">
           <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
       </a>
       <a class="right carousel-control" href="/galleri/{{$images[2]->id}}" role="button" data-slide="next">
           <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
       </a>
    <!-- /.container -->
</section>
@endsection