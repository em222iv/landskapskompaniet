@extends('app')

@section('content')
<!-- Portfolio Item Row -->
 <section id="plow" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <img class="img-responsive" width="100%" src="{{$data['service']->img}}" alt="">
            </div>
            <div class="col-md-4">
                <h3>{{$data['service']->title}}</h3>
                <p>{{$data['service']->text}}</p>
                <div class="list-inline social-buttons pull-right">
                    @include('_partials.contactButtons')
                </div>
                <h3>Kategorier</h3>
                <ul>
                    @foreach($data['service']->sub_services as $subservice)
                     <a href="#{{$subservice['head-title']}}"><li>{{$subservice['head-title']}} {{$subservice['sub-title']}}</li></a>
                     @endforeach
                </ul>
            </div>
        </div>
        <!-- Related Projects Row -->
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Andra tjänster</h3>
            </div>
             @foreach($data['services'] as $service)
              <div class="col-sm-3 col-xs-6">
                <a href="{{$service->title}}">
                <div class="text-center"><h4>{{$service->title}}</h4></div>
                    <div class="other-services-img">
                        <img class="img-responsive portfolio-item" src="{{$service->img}}" alt="">
                    </div>
                </a>
                   <div class="contain-text"><p>{{$service->text}}</p></div>
              </div>
             @endforeach
        </div>
    </div>
</section>
<section id="features">
    <div class="container">
        <div class="row">
           @foreach($data['service']->sub_services as $subservice)
                <div class="row featurette" >

                    <div class="col-md-6" id="subserivce-img-holder">
                      <a name="{{$subservice['head-title']}}"></a>
                        <img class="featurette-image img-responsive center-block"  id="subservice-holder-img"  src="{{$subservice->img}}" data-holder-rendered="true">
                    </div>
                     <div class="col-md-6" >
                        <h2 class="featurette-heading">{{$subservice['head-title']}}<span class="text-muted">  {{$subservice['sub-title']}}</span></h2>
                        <p class="lead">{{$subservice->text}}</p>
                    </div>
                </div>

            @endforeach
            <!-- /END THE FEATURETTES -->

        </div>
    </div>
</section>
        @endsection