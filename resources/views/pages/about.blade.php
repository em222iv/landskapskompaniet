@extends('app')

@section('content')
    <section id="about" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="section-heading">Landskapskompaniet</h3>
                    <h3 class="section-subheading text-muted">Vi som jobbar och sammarbetar kring Landskapskompaniet</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6" id="team-member-holder">
                    <div class="team-member">
                       <img src="https://scontent-ams3-1.xx.fbcdn.net/hphotos-xpf1/v/t1.0-9/10464294_10153154647470993_1619602019026095887_n.jpg?oh=d9ae376d2daec2eaee422f328d246167&oe=55E93DE8" class=" img-circle" alt="">
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
                                <img id="timeline-picture1" class="img-responsive" src="https://scontent-ams3-1.xx.fbcdn.net/hphotos-xpf1/v/t1.0-9/10464294_10153154647470993_1619602019026095887_n.jpg?oh=d9ae376d2daec2eaee422f328d246167&oe=55E93DE8" alt="">
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