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
           <div class="col-lg-6">
               <div class="bs-component">
                   <div class="list-group">
                       <div class="list-group-item">
                           <div class="row-action-primary">
                               <i class="mdi-file-folder"></i>
                           </div>
                           <div class="row-content">
                               <div class="least-content">15m</div>
                               <h4 class="list-group-item-heading">Tile with a label</h4>
                               <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
                           </div>
                       </div>
                       <div class="list-group-separator"></div>
                       <div class="list-group-item">
                           <div class="row-action-primary">
                               <i class="mdi-file-folder"></i>
                           </div>
                           <div class="row-content">
                               <div class="least-content">10m</div>
                               <h4 class="list-group-item-heading">Tile with a label</h4>
                               <p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
                           </div>
                       </div>
                       <div class="list-group-separator"></div>
                       <div class="list-group-item">
                           <div class="row-action-primary">
                               <i class="mdi-file-folder"></i>
                           </div>
                           <div class="row-content">
                               <div class="least-content">8m</div>
                               <h4 class="list-group-item-heading">Tile with a label</h4>
                               <p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
                           </div>
                       </div>
                       <div class="list-group-separator"></div>
                   </div>
               </div>
           </div>
           <div class="col-lg-6">
               <div class="bs-component">
                   <div class="list-group">
                       <div class="list-group-item">
                           <div class="row-action-primary">
                               <i class="mdi-file-folder"></i>
                           </div>
                           <div class="row-content">
                               <div class="action-secondary"><i class="mdi-material-info"></i></div>
                               <h4 class="list-group-item-heading">Tile with an icon</h4>
                               <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
                           </div>
                       </div>
                       <div class="list-group-separator"></div>
                       <div class="list-group-item">
                           <div class="row-action-primary">
                               <i class="mdi-file-folder"></i>
                           </div>
                           <div class="row-content">
                               <div class="action-secondary"><i class="mdi-material-info"></i></div>
                               <h4 class="list-group-item-heading">Tile with an icon</h4>
                               <p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
                           </div>
                       </div>
                       <div class="list-group-separator"></div>
                       <div class="list-group-item">
                           <div class="row-action-primary">
                               <i class="mdi-file-folder"></i>
                           </div>
                           <div class="row-content">
                               <div class="action-secondary"><i class="mdi-material-info"></i></div>
                               <h4 class="list-group-item-heading">Tile with an icon</h4>
                               <p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
                           </div>
                       </div>
                       <div class="list-group-separator"></div>
                   </div>
               </div>
           </div>
       </div>
   </div>
</section>
<!-- Portfolio Grid Section -->
<section id="portfolio" class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Portfolio</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/roundicons.png" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Round Icons</h4>
                    <p class="text-muted">Graphic Design</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/startup-framework.png" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Startup Framework</h4>
                    <p class="text-muted">Website Design</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/treehouse.png" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Treehouse</h4>
                    <p class="text-muted">Website Design</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/golden.png" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Golden</h4>
                    <p class="text-muted">Website Design</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="mdi-editor-format-indent-increase"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/escape.png" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Escape</h4>
                    <p class="text-muted">Website Design</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="fa fa-plus fa-3x" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/dreams.png" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Dreams</h4>
                    <p class="text-muted">Website Design</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection