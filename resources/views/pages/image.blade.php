 @extends('app')
 @section('content')

<style>body {
       	margin-top: 50px;
       	margin-bottom: 50px;
       	background: none;
       }

       .full {
         background: url(https://scontent-ams.xx.fbcdn.net/hphotos-xpa1/v/t1.0-9/18723_843327489065796_366994632714234662_n.jpg?oh=d0d3130a773c5cc4da19c09437900b8b&oe=55BA2395) no-repeat center center fixed;
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
       }

        .navbar-wrapper{
            height:50vh;
        }
        footer {
        margin-top:50vh;
        color:white;

        }

       </style>
 <!-- Page Content -->
<section>

    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
           <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
       </a>
       <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
           <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
       </a>
    <!-- /.container -->
</section>
@endsection