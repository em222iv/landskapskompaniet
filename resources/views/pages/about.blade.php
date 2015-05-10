@extends('app')

@section('content')
    <!-- Team Section -->
    <section id="about" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="section-heading">Landskapskompaniet</h3>
                    <h3 class="section-subheading text-muted">Vi som jobbar och sammarbetar kring Landskapskompaniet</h3>
                </div>
            </div>
            <div class="row">

                <div class="col-sm-6">
                    <div class="team-member">
                       <img src="https://scontent-ams.xx.fbcdn.net/hphotos-xpf1/v/t1.0-9/10464294_10153154647470993_1619602019026095887_n.jpg?oh=036c32ee172bedb643ec3c0432f112c6&amp;oe=557296E8" class="img-responsive img-circle" alt="">
                        <h4>Carl Matsson</h4>
                        <p class="text-muted">VD</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h4>Calle</h4>
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>

                     <h4>Landskapskompaniet</h4>
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                       @include('_partials.contactButtons')
                </div>
            </div>
        </div>

    </section>
    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Om oss</h2>
                    <h3 class="section-subheading text-muted">Historien bakom Landskapkompaniet</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img id="timeline-picture1" class="img-responsive" src="https://scontent-ams.xx.fbcdn.net/hphotos-xpf1/v/t1.0-9/10464294_10153154647470993_1619602019026095887_n.jpg?oh=036c32ee172bedb643ec3c0432f112c6&amp;oe=557296E8" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Just NU</h4>
                                    <h4 class="subheading">Under uppbyggnad</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Snart kommer ni att kunna ta del av våran historia!</p>
                                </div>
                            </div>
                        </li>
                        {{--<li class="timeline-inverted">--}}
                            {{--<div class="timeline-image">--}}
                                {{--<img id="timeline-picture2" class="img-responsive" src="https://fbcdn-sphotos-b-a.akamaihd.net/hphotos-ak-xpa1/v/t1.0-9/284881_10150323243172392_189074_n.jpg?oh=3b755b84a2cc911d0f1c2b4a0f04b44b&oe=559F9F16&__gda__=1437566758_022d40219c73d87f57510e9a6a4ab19d" alt="">--}}
                            {{--</div>--}}
                            {{--<div class="timeline-panel">--}}
                                {{--<div class="timeline-heading">--}}
                                    {{--<h4>Mars 2011</h4>--}}
                                    {{--<h4 class="subheading">Ett partnerskap föds</h4>--}}
                                {{--</div>--}}
                                {{--<div class="timeline-body">--}}
                                    {{--<p class="text-muted">Carl somnar ovetandes i soffa med fruktansvärt fager främling</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                       <li class="timeline-inverted">
                            <a href="/kontakt">
                                <div class="timeline-image">
                                    <h4>Bli en
                                    <br>del av våran
                                    <br>historia!</h4>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection