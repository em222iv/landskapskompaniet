@extends('app')

@section('content')
<!-- Full Width Image Header -->

<!-- Page Content -->
<div class="container">
    <!-- First Featurette -->
    <div class="featurette" id="about">
        <img class="featurette-image img-circle img-responsive pull-right" src="http://www.svenskakyrkan.se/Sve/Bilder/Bilder/2014%20022%20-%20edit%202.jpg">

        <h2 class="featurette-heading">Landskapkompaniet
            <span class="text-muted">hjälper dig med allahanda trädvård</span>
        </h2>

        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        <div class="container">
            Kontakt:
            <button class="btn btn-fab btn-raised btn-material-blue pull-right"><i class="mdi-communication-phone"></i></button>
        <button class="btn btn-fab btn-raised btn-primary pull-right"><i class="mdi-communication-email"></i></button>
        </div>
    </div>

    <hr class="featurette-divider">

    <!-- Second Featurette -->
    <div class="featurette" id="services">
        <img id="plog-bild" class="featurette-image img-circle img-responsive pull-left" max-width="500px" src="http://www.ci.new-brighton.mn.us/vertical/Sites/%7B2CF34F28-6DFB-45DA-AF59-36896254F224%7D/uploads/%7BEA6A77AB-880E-4E27-ACFF-743991F45421%7D.JPG">
        <h2 class="featurette-heading">Plogning
            <span class="text-muted">i vintertid kan vara ett stort problem</span>
        </h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        <button class="btn btn-fab btn-raised btn-primary pull-left"><i class="mdi-communication-email"></i></button>
        <button class="btn btn-fab btn-raised btn-material-blue pull-left"><i class="mdi-communication-phone"></i></button>

    </div>

    <hr class="featurette-divider">

    <!-- Third Featurette -->
    <div class="featurette" id="contact">
        <img class="featurette-image img-circle img-responsive pull-right" src="http://placehold.it/500x500">
        <h2 class="featurette-heading">The Third Heading
            <span class="text-muted">Will Seal the Deal.</span>
        </h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>

    <hr class="featurette-divider">
</div>

@endsection