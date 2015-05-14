@extends('app')

@section('content')



<!-- Portfolio Grid Section -->
<section id="portfolio" class="bg-light-gray">
    <div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-offset-2  text-center">
         <h3 class="section-heading">Landskapskompaniet</h3>
            <h3 class="section-subheading text-muted">Träd, grönytor och snöröjning! Våra proffesionella Arborister och Greenkeepers hjälper kommuner, kyrkor och privata kunder med deras landskapsvisioner!</h3>
        </div>
    </div>

    <div class="col-lg-8 col-md-offset-2  text-center">
         <ul class="list-inline intro-social-buttons">
                <li>
                  <a href="#tjanster" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Tjänster</span></a>
              </li>
             <li>
                 <a href="#priser" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Priser</span></a>
             </li>
             <li>
                 <a href="#forsakring" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Försäkringar</span></a>
             </li>
               <li>
                  <a href="#RUT" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">RUT-avdrag</span></a>
              </li>
              <li>
                  <a href="#arborist" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Vad är en arborist?</span></a>
              </li>

         </ul>
    </div>

    {{--<div class="btn-group btn-group-justified">--}}
        {{--<a href="javascript:void(0)" class="btn btn-default">Tjänster</a>--}}
        {{--<a href="javascript:void(0)" class="btn btn-default">Försäkringar</a>--}}
         {{--<a href="javascript:void(0)" class="btn btn-default">Priser</a>--}}
         {{--<a href="javascript:void(0)" class="btn btn-default">RUT</a>--}}

    {{--</div>--}}


    <a name="tjanster"></a>
    <div class="col-md-12"> <hr class="intro-divider">
      <div class="col-lg-8 col-md-offset-2  text-center">
       <h3 class="section-heading">Tjänster</h3>
      </div>
    </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="bs-component">
                    @foreach($services as $service)
                        <div class="service-panel col-md-3 col-sm-6 portfolio-item">
                            <a href="tjänster/{{$service->id}}" class="portfolio-link other-services-img" data-toggle="modal">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                        <i class="fa fa-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img src="{{$service->img}}" class=" img-responsive" alt="">
                                <div class="ripple-wrapper"></div>
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
        </div>
        <a name="priser"></a>
        <div class="content-section-b">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-sm-6">
                            <hr class="section-heading-spacer">
                            <div class="clearfix"></div>
                            <h2 class="section-heading">Priser<br></h2>
                            <p class="lead">Bla balbalb aslba Bla balbalb aslba Bla balbalb aslba Bla balbalb aslba Bla balbalb aslba Bla balbalb aslba </p>
                             @include('_partials.contactButtons')
                        </div>
                        <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                            <img class="img-responsive" src="http://digital-photography-school.com/wp-content/uploads/flickr/3570689413_a5695705d1_o.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <a name="forsakring"></a>
           <div class="content-section-a">
               <div class="container">
                   <div class="row">
                       <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                           <hr class="section-heading-spacer">
                           <div class="clearfix"></div>
                           <h2 class="section-heading">Försäkran och<br>Garantiner</h2>
                           <p class="lead">bla balba lbalb lbalb dlda lbla <a href="#services">våra tjänster</a>nlablab bla bla bla lablab bla bla bla blablab bla bla bla blablab bla bla bla blablab bla bla bla blablab bla bla bla blablab bla bla bla blablab bla bla bla blablab bla bla bla b blalbb</p>
                       </div>
                       <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                           <img class="img-responsive" src="http://digital-photography-school.com/wp-content/uploads/flickr/3570689413_a5695705d1_o.jpg" alt="">
                       </div>
                   </div>

               </div>
           </div>
             <a name="RUT"></a>
            <div id="RUT-section" class="content-section-b">
               <div class="container">
                   <div class="row">
                       <div class="col-lg-5 col-sm-6">
                           <hr class="section-heading-spacer">
                           <div class="clearfix"></div>
                           <h2 class="section-heading">Tjänster för<br> RUT-avdrag?</h2>
                            <p class="lead">bla balba lbalb lbalb dlda lbla <a href="#services">våra tjänster</a>nlablab bla bla bla blalbb</p>
                       </div>
                       <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                           <img class="img-responsive" src="http://digital-photography-school.com/wp-content/uploads/flickr/3570689413_a5695705d1_o.jpg" alt="">
                       </div>
                   </div>

               </div>
           </div>
             <a name="arborist"></a>
              <div id="arborist-section" class="content-section-a">
                  <div class="container">
                    {{--<hr class="section-heading-spacer">--}}
                      <div class="row">

                          <div class="col-sm-offset-2 col-sm-8">
                                <hr id="arbrist-divider" class="section-heading-spacer">
                              <div class="clearfix"></div>
                              <h2 class="section-heading">Vad är en arborsit?</h2>
                              <p class="lead">bla balba lbalb lbalb dlda lblanlablab bla bla bla lablabla balba lbalb lbalb dlda lblanlablab bla bla bla lablab bla bla bla blablab bla balba lbalb lbalb dlda lblanlablab bla bla bla lablab bla bla bla blablab bla balba lbalb lbalb dlda lblanlablab bla bla bla lablab bla bla bla blablab b bla bla bla blablab bla bla bla blablab bla bla bla blablab bla bla bla blablab bla bla bla blablab bla bla bla blablab bla bla bla blablab bla bla bla b blalbb</p>
                          </div>

                      </div>

                  </div>
              </div>
    </div>
</section>

@endsection
