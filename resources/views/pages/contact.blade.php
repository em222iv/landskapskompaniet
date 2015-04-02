@extends('app')

@section('content')

<section id="contact">
   <div class="container">
      <div class="row">
          <div class="box">
              <div class="col-lg-12">
                  <hr>
                  <h2 class="intro-text text-center">Kontakt
                      <strong>formulär</strong>
                  </h2>
                  <hr>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, vitae, distinctio, possimus repudiandae cupiditate ipsum excepturi dicta neque eaque voluptates tempora veniam esse earum sapiente optio deleniti consequuntur eos voluptatem.</p>
                  <form role="form">
                   <input type="hidden" name="_token" value="{{ csrf_token() }}">

                      <div class="row">
                          <div class="form-group col-lg-4">
                              <strong>Namn</strong>
                              <input type="text" class="form-control" Placeholder="t.ex. Tore Jönsson" name="name" value="{{ old('name') }}">
                          </div>
                             <div class="form-group col-lg-4">
                                 <label>Adress</label>
                                 <input type="text" class="form-control" name="adress" placeholder="t.ex. Drottninggatan 23" value="{{ old('adress') }}">
                             </div>
                          <div class="form-group col-lg-4">
                              <label>Email Adress</label>
                               <input type="email" class="form-control" name="email"  placeholder='t.ex. Tore@gmail.com' value="{{ old('email') }}">
                          </div>
                          <div class="form-group col-lg-4">
                              <label>Telefon numerr</label>
                                 <input type="number" class="form-control floating-label" placeholder="t.ex. t.ex. 0754 34 93 818"  value="{{ old('phone') }}">
                          </div>
                           <div class="form-group col-lg-4">
                                <label>Företag</label>
                                   <input type="text" class="form-control" name="adress" placeholder="t.ex. Apple, Microsoft, Lättviktmotor" value="{{ old('adress') }}">
                            </div>
                          <div class="clearfix"></div>
                          <div class="form-group col-lg-12">
                              <label>Message</label>
                              <textarea class="form-control" rows="4" placeholder="Beskiv ditt meddelandet här"></textarea>
                          </div>
                          <div class="form-group">
                              <div class="col-md-10 col-md-offset-10">
                                  <button type="submit" class="btn btn-primary">
                                      Skicka
                                  </button>
                              </div>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</section>
{{--
<div class="container">
    <div class="row">

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 col-md-push-5">
                    <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5 col-md-pull-7">
                    <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="500x500" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDUwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iNTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjE5MC4zMTI1IiB5PSIyNTAiIHN0eWxlPSJmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MjNwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj41MDB4NTAwPC90ZXh0PjwvZz48L3N2Zz4=" data-holder-rendered="true">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="500x500" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDUwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iNTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjE5MC4zMTI1IiB5PSIyNTAiIHN0eWxlPSJmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MjNwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj41MDB4NTAwPC90ZXh0PjwvZz48L3N2Zz4=" data-holder-rendered="true">
                </div>
            </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div>
    </div>
</div>
--}}

@endsection
