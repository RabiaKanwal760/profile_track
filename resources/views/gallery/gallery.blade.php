@extends('layout.app')

@section('content')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Gallery Example</h1>
                <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div id="port-folio">
              <div class="row " >
                  <ul id="filters" >
                <li><span class="filter active" data-filter="landscape nature awesome">All </span></li>
                <li><span class="filter active">/</span></li>
                <li><span class="filter" data-filter="landscape">Landscape</span></li>
                <li><span class="filter">/</span></li>
                <li><span class="filter" data-filter="nature">Nature</span></li>
                <li><span class="filter">/</span></li>
                <li><span class="filter" data-filter="awesome">Awesome</span></li>
            </ul>
        <div class="col-md-4 ">

            <div class="portfolio-item awesome mix_all" data-cat="awesome" >


                <img src="assets/img/portfolio/g.jpg" class="img-responsive " alt="" />
                <div class="overlay">
                    <p>
                        <span>
                        Image Orinagal Size: 750x500
                        </span>
                       
                        PROJECT TITLE HERE
                    </p>
                    <a class="preview btn btn-info " title="Image Title Here" href="assets/img/portfolio/g.jpg"><i class="fa fa-plus fa-2x"></i></a>

                </div>
            </div>
        </div>
        <div class="col-md-4 ">

            <div class="portfolio-item landscape mix_all" data-cat="landscape" >


                <img src="assets/img/portfolio/b.jpg" class="img-responsive " alt="" />
                <div class="overlay">
                    <p>
                        <span>
                        Image Orinagal Size: 750x500
                        </span>
                       
                        PROJECT TITLE HERE
                    </p>
                    <a class="preview btn btn-info" title="Image Title Here" href="assets/img/portfolio/b.jpg"><i class="fa fa-plus fa-2x"></i></a>

                </div>
            </div>
        </div>
        <div class="col-md-4 ">

            <div class="portfolio-item nature mix_all" data-cat="nature" >


                <img src="assets/img/portfolio/c.png" class="img-responsive " alt="" />
                <div class="overlay">
                  <p>
                        <span>
                        Image Orinagal Size: 750x500
                        </span>
                       
                        PROJECT TITLE HERE
                    </p>
                    <a class="preview btn btn-info" title="Image Title Here" href="assets/img/portfolio/c.png"><i class="fa fa-plus fa-2x"></i></a>

                </div>
            </div>
        </div>

    </div>

    <div class="row " style="padding-top: 50px;">
        <div class="col-md-4 ">

            <div  class="portfolio-item nature mix_all" data-cat="nature" >


                <img src="assets/img/portfolio/d.jpg" class="img-responsive " alt="" />
                <div class="overlay">
                   <p>
                        <span>
                        Image Orinagal Size: 750x500
                        </span>
                       
                        PROJECT TITLE HERE
                    </p>
                    <a class="preview btn btn-info " title="Image Title Here" href="assets/img/portfolio/d.jpg"><i class="fa fa-plus fa-2x"></i></a>

                </div>
            </div>
        </div>
        <div class="col-md-4 ">

            <div  class="portfolio-item nature mix_all" data-cat="nature" >


                <img src="assets/img/portfolio/e.jpg" class="img-responsive " alt="" />
                <div class="overlay">
                    <p>
                        <span>
                        Image Orinagal Size: 750x500
                        </span>
                       
                        PROJECT TITLE HERE
                    </p>
                    <a class="preview btn btn-info" title="Image Title Here" href="assets/img/portfolio/e.jpg"><i class="fa fa-plus fa-2x"></i></a>

                </div>
            </div>
        </div>
        <div class="col-md-4 ">

            <div  class="portfolio-item nature mix_all" data-cat="nature" >


                <img src="assets/img/portfolio/h.jpg" class="img-responsive " alt="" />
                <div class="overlay">
                  <p>
                        <span>
                        Image Orinagal Size: 750x500
                        </span>
                       
                        PROJECT TITLE HERE
                    </p>
                    <a class="preview btn btn-info" title="Image Title Here" href="assets/img/portfolio/h.jpg"><i class="fa fa-plus fa-2x"></i></a>

                </div>
            </div>
        </div>

    </div>
            <div class="row "  style="padding-top: 50px;" >
        <div class="col-md-4 ">

            <div  class="portfolio-item nature mix_all" data-cat="nature" >


                <img src="assets/img/portfolio/g.jpg" class="img-responsive " alt="" />
                <div class="overlay">
                    <p>
                        <span>
                        Image Orinagal Size: 750x500
                        </span>
                       
                        PROJECT TITLE HERE
                    </p>
                    <a class="preview  btn btn-info" title="Image Title Here" href="assets/img/portfolio/g.jpg"> <i class="fa fa-plus fa-2x"></i></a>

                </div>
            </div>
        </div>
        <div class="col-md-4 ">

            <div  class="portfolio-item awesome mix_all" data-cat="awesome" >


                <img src="assets/img/portfolio/b.jpg" class="img-responsive " alt="" />
                <div class="overlay">
                    <p>
                        <span>
                        Image Orinagal Size: 750x500
                        </span>
                       
                        PROJECT TITLE HERE
                    </p>
                    <a class="preview btn btn-info" title="Image Title Here" href="assets/img/portfolio/b.jpg"><i class="fa fa-plus fa-2x"></i></a>

                </div>
            </div>
        </div>
        <div class="col-md-4 ">

            <div  class="portfolio-item nature landscape mix_all" data-cat="nature landscape" >


                <img src="assets/img/portfolio/c.png" class="img-responsive " alt="" />
                <div class="overlay">
                  <p>
                        <span>
                        Image Orinagal Size: 750x500
                        </span>
                       
                        PROJECT TITLE HERE
                    </p>
                    <a class="preview btn btn-info" title="Image Title Here" href="assets/img/portfolio/c.png"><i class="fa fa-plus fa-2x"></i></a>

                </div>
            </div>
        </div>

    </div>
        </div>
       

    </div>
    <!-- /. PAGE INNER  -->
</div>



@endsection
@section('Script')
     
 <!-- PAGE LEVEL SCRIPTS -->
 <script src="assets/js/jquery.prettyPhoto.js"></script>
 <script src="assets/js/jquery.mixitup.min.js"></script>
    <!-- CUSTOM Gallery Call SCRIPTS -->
<script src="assets/js/galleryCustom.js"></script>

@endsection
@section('Css')
<!-- PAGE LEVEL STYLES -->
<link href="assets/css/prettyPhoto.css" rel="stylesheet" />
@endsection