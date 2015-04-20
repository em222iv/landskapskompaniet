@extends('app')

@section('content')
    <section id="contact">
    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Kontakta
                        <strong>Landskapskompaniet</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=59.776794,18.613586&amp;spn=56.506174,79.013672&amp;t=m&amp;z=5&amp;output=embed"></iframe>
                </div>
                <div class="col-md-4">
                    <p>Telefon:
                        <strong>123.456.7890</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:name@example.com">calle@landskapskompaniet.com</a></strong>
                    </p>
                    <p>Adress:
                        <strong>Lohärad nånstans
                            <br>76312, Norrtälje</strong>
                    </p>
                    <ul class="list-inline social-buttons">
                        <li>
                            <a href="tel:+1-303-499-7111" class="btn btn-fab btn-raised btn-material-blue pull-left"><i class="mdi-communication-phone"></i></a>
                        </li>
                        <li>
                            <a href="mailto:webmaster@example.com" class="btn btn-fab btn-primary pull-left"><i class="mdi-communication-email"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>

<section id="partners">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h3 class="section-heading">Sammarbetspartners</h3>
            <h4 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h4>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="team-member">
            <img src="https://scontent-ams.xx.fbcdn.net/hphotos-xpf1/v/t1.0-9/10464294_10153154647470993_1619602019026095887_n.jpg?oh=036c32ee172bedb643ec3c0432f112c6&amp;oe=557296E8" class="img-responsive img-circle" alt="">
            <h4>Lättviksmotor</h4>
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
    <div class="col-sm-3">
        <div class="team-member">
            <img src="https://scontent-ams.xx.fbcdn.net/hphotos-xpf1/v/t1.0-9/10464294_10153154647470993_1619602019026095887_n.jpg?oh=036c32ee172bedb643ec3c0432f112c6&amp;oe=557296E8" class="img-responsive img-circle" alt="">
            <h4>Britten</h4>
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
    <div class="col-sm-3">
        <div class="team-member">
            <img src="https://scontent-ams.xx.fbcdn.net/hphotos-xpf1/v/t1.0-9/10464294_10153154647470993_1619602019026095887_n.jpg?oh=036c32ee172bedb643ec3c0432f112c6&amp;oe=557296E8" class="img-responsive img-circle" alt="">
            <h4>Någon annan</h4>
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
    <div class="col-sm-3">
        <div class="team-member">
            <img src="https://scontent-ams.xx.fbcdn.net/hphotos-xpf1/v/t1.0-9/10464294_10153154647470993_1619602019026095887_n.jpg?oh=036c32ee172bedb643ec3c0432f112c6&amp;oe=557296E8" class="img-responsive img-circle" alt="">
            <h4>Någon annnan, annan</h4>
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
</section>
@endsection
