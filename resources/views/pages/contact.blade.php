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
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    {{--<iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=59.776794,18.613586&amp;spn=56.506174,79.013672&amp;t=m&amp;z=9&amp;output=embed"></iframe>--}}
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
                        <img src="https://scontent-ams.xx.fbcdn.net/hphotos-xpf1/v/t1.0-9/10464294_10153154647470993_1619602019026095887_n.jpg?oh=036c32ee172bedb643ec3c0432f112c6&amp;oe=557296E8" class=" img-circle" alt="">
                        <h4>Kay Garland</h4>
                        <p class="text-muted">Lead Designer</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="https://scontent-ams.xx.fbcdn.net/hphotos-xpf1/v/t1.0-9/10464294_10153154647470993_1619602019026095887_n.jpg?oh=036c32ee172bedb643ec3c0432f112c6&amp;oe=557296E8" class=" img-circle" alt="">
                        <h4>Larry Parker</h4>
                        <p class="text-muted">Lead Marketer</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="https://scontent-ams.xx.fbcdn.net/hphotos-xpf1/v/t1.0-9/10464294_10153154647470993_1619602019026095887_n.jpg?oh=036c32ee172bedb643ec3c0432f112c6&amp;oe=557296E8" class=" img-circle" alt="">
                        <h4>Diana Pertersen</h4>
                        <p class="text-muted">Lead Developer</p>
                        {{--<ul class="list-inline social-buttons">--}}
                            {{--<li><a href="#"><i class="fa fa-twitter"></i></a>--}}
                            {{--</li>--}}
                            {{--<li><a href="#"><i class="fa fa-facebook"></i></a>--}}
                            {{--</li>--}}
                            {{--<li><a href="#"><i class="fa fa-linkedin"></i></a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
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
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
     <script>
 var geocoder;
 var map;
 function initialize() {
   geocoder = new google.maps.Geocoder();
   var latlng = new google.maps.LatLng(-34.397, 150.644);
   var mapOptions = {
     zoom: 8,
     center: latlng
   }
   map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
   codeAddress();
 }

 function codeAddress() {

   var address = 'Råbyvägen 28, 76172, Norrtälje';
   geocoder.geocode( { 'address': address}, function(results, status) {
     if (status == google.maps.GeocoderStatus.OK) {
       map.setCenter(results[0].geometry.location);
       var marker = new google.maps.Marker({
           map: map,
           position: results[0].geometry.location
       });
     } else {
       alert('Geocode was not successful for the following reason: ' + status);
     }
   });
 }

 google.maps.event.addDomListener(window, 'load', initialize);
</script>
@endsection
