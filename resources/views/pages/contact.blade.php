@extends('app')

@section('content')

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3 class="section-heading">Landskapskompaniet</h3>
                <h3 class="section-subheading text-muted">Vi hjälper dig med träd, skog, plogning och allahanda tjänster</h3>
            </div>
            <div class="box">
                <div class="col-md-8">
                    <div id="map-canvas"></div>
                </div>
                <div class="col-md-4">
                    <div class="center">
                        <div>
                            <i class="mdi-communication-business"></i><p><span>Råbyvägen 28</span><br>76172, Norrtälje</p>
                        </div>
                        <div>
                            <i class="mdi-communication-phone"></i>
                            <p>Telefon: <a href="tel:+1-303-499-7111">00736511977</a></p>
                        </div>
                        <div>
                            <i class="mdi-communication-email"></i>
                            <p>E-mail: <a href="mailto:webmaster@example.com">landskapskompaniet@gmail.com</a></p>
                        </div>
                        <p>
                            Orgnr:  <strong>556994-4134</strong>
                        </p>
                        <div>
                           <p>
                            @include('_partials.contactButtons')
                           </p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
<section id="team" class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4 class="section-heading">Sammarbetspartner</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="https://scontent-ams3-1.xx.fbcdn.net/hphotos-xpf1/v/t1.0-9/10464294_10153154647470993_1619602019026095887_n.jpg?oh=d9ae376d2daec2eaee422f328d246167&oe=55E93DE8" class=" img-circle" alt="">
                        <h4>Kay Garland</h4>
                        <p class="text-muted">Lead Designer</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="https://scontent-ams3-1.xx.fbcdn.net/hphotos-xpf1/v/t1.0-9/10464294_10153154647470993_1619602019026095887_n.jpg?oh=d9ae376d2daec2eaee422f328d246167&oe=55E93DE8" class=" img-circle" alt="">
                        <h4>Larry Parker</h4>
                        <p class="text-muted">Lead Marketer</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="https://scontent-ams3-1.xx.fbcdn.net/hphotos-xpf1/v/t1.0-9/10464294_10153154647470993_1619602019026095887_n.jpg?oh=d9ae376d2daec2eaee422f328d246167&oe=55E93DE8" class=" img-circle" alt="">
                        <h4>Diana Pertersen</h4>
                        <p class="text-muted">Lead Developer</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('footer')
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
<script src="{{ asset('/js/map.js') }}"></script>
@endsection