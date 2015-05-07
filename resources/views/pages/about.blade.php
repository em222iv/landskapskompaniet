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
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
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
                                <img id="timeline-picture1" class="img-responsive" src="https://scontent-ams.xx.fbcdn.net/hphotos-xft1/v/t1.0-9/1929203_131778640992_1504921_n.jpg?oh=96cf8702bde6168b6dcdc4b2aebd5563&oe=55B571FD" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2009-2011</h4>
                                    <h4 class="subheading">Landskapsmongon och ölkompaniet</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Carl tar sig ur skolsystemet, helt prickfri!... nästan. Studenten tar sitt på karln och han är idag vad han är.. en tapper vedhuggare med ett ölsinne som en förtörstad gnu på saharas oförlåtande slätter</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img id="timeline-picture2" class="img-responsive" src="https://fbcdn-sphotos-b-a.akamaihd.net/hphotos-ak-xpa1/v/t1.0-9/284881_10150323243172392_189074_n.jpg?oh=3b755b84a2cc911d0f1c2b4a0f04b44b&oe=559F9F16&__gda__=1437566758_022d40219c73d87f57510e9a6a4ab19d" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Mars 2011</h4>
                                    <h4 class="subheading">Ett partnerskap föds</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Carl somnar ovetandes i soffa med fruktansvärt fager främling</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img id="timeline-picture3" class="img-responsive" src="https://fbcdn-sphotos-e-a.akamaihd.net/hphotos-ak-xfa1/v/t1.0-9/10482470_10152892323914865_5175479861958275444_n.jpg?oh=d04594727e53dd78d83d93843b25f33a&oe=55B57FCF&__gda__=1436226850_b85d6171bf2418347ff2d6400a8aedbf" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2013-2014</h4>
                                    <h4 class="subheading">Lättvikstmotor och det riktigta livet</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Efter 7 svåra år lär sig Carl att ölen inte är gratis. Han tar anställning som dubbdäcksputs hos lättviktarna, ett arbete som snart betalar av sig då han har ett öga för gummi. Han klättrar snabbt i rankerna och lever idag livet i Lohärads skogar. Myten säger att man än idag kan höra hans Electric Nurse-dränkta skräl eka mellan tallarna.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img id="timeline-picture4" class="img-responsive" src="https://scontent-ams.xx.fbcdn.net/hphotos-xfp1/v/t1.0-9/11006376_826780984053780_6330594013323611392_n.jpg?oh=324b1a7213d62c9808adf6e230b9144d&oe=55A52F9E" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2015</h4>
                                    <h4 class="subheading">Landskapskompaniet kommer till världen. Carls första och, förhoppningsvis, enda barn</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Med år av erfarenhet i ryggen, dock mestadels kaffekokande med rätt andel socker och mjölk åt bossen, så tar han klivet. Egenföretagande passar Carl som handen runt gashandtaget, skitigt och ärligt lyder mottot. Spån är ett dagsleverne, gasolin är en dygd, välkommen till Landskapskompaniet AB!</p>
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