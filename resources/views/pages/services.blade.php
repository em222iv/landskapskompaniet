@extends('app')

@section('content')



<!-- Portfolio Grid Section -->
<section id="portfolio" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Tjänster</h2>
                <h3 class="section-subheading text-muted">Nedan ser du alla tjänster som vi erbjuder</h3>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="bs-component">
                    @foreach($services as $service)
                        <div class="service-panel col-md-4 col-sm-6 portfolio-item">
                            <a href="tjänster/{{$service->title}}" class="portfolio-link other-services-img" data-toggle="modal">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                        <i class="fa fa-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img src="{{$service->img}}" class=" img-responsive" alt="">
                            </a>
                            <div class="portfolio-caption">
                                <h4>{{$service->title}}</h4>
                                <p class="text-muted contain-text">{{$service->text}}</p>
                                 <ul class="list-inline social-buttons pull-right">
                                    <li>
                                        <a href="tel:+1-303-499-7111" class="btn btn-fab btn-raised btn-material-blue pull-left"><i class="mdi-communication-phone"></i></a>
                                    </li>
                                    <li>
                                        <a href="mailto:webmaster@example.com" class="btn btn-fab btn-primary pull-left"><i class="mdi-communication-email"></i></a>
                                    </li>
                                 </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection