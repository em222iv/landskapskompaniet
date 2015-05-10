@extends('app')

@section('content')
<!-- Portfolio Item Row -->
 <section id="service" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <img class="img-responsive" width="100%" src="/{{$data['service']->img}}" alt="">
            </div>
            <div class="col-md-4">
                <h3>{{$data['service']->title}}</h3>
                <p>{{$data['service']->text}}</p>
                <div class="list-inline social-buttons pull-right">
                    @include('_partials.contactButtons')
                </div>
                <h4>Deltjänster</h4>
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
                <div class="service-panel col-md-2 col-sm-6 portfolio-item">
                   <a href="tjänster/{{$service->title}}" class="portfolio-link other-services-img" data-toggle="modal">
                       <div class="portfolio-hover">
                           <div class="portfolio-hover-content">
                               <i class="fa fa-plus fa-3x"></i>
                           </div>
                       </div>
                       <img src="{{$service->img}}" id="services-service-img" class=" img-responsive" alt="">
                   </a>
                   <div class="portfolio-caption">
                       <h4>{{$service->title}}</h4>
                       <p class="text-muted contain-text">{{$service->text}}</p>
                        <div class="list-inline social-buttons pull-right">

                        </div>
                   </div>
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

                    <div class="col-md-3" id="subserivce-img-holder">
                      <a name="{{$subservice['head-title']}}"></a>
                        <img class="featurette-image img-responsive center-block"  id="subservice-holder-img"  src="{{$subservice->img}}" data-holder-rendered="true">
                    </div>
                     <div class="col-md-9" >
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