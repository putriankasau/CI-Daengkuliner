<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand mynavbar" href="#"><small>Logo</small></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="container">
        <div class="collapse navbar-collapse mt-7" id="navbarNav">
            <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link" href="#section1">BERANDA <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#section2">KATEGORI</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#section3">RESEP</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#section4">TENTANG</a>
            </li>
            </ul>
        </div>
  </div>
        <ul class="navbar-nav mynavbar">
            <li class="nav-item">
                <a class="nav-link" href="#"><small><i class="fa fa-search"></i></small></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><small><i class="fa fa-user"></i></small></a>
            </li>
        </ul>
</nav>

<div class="jumbotron jumbo" id="section1">
    <div class="container mt-8 text-white">
     <center >
     <h1 class="display-1 my-4 text-warning font-header">Daeng Kuliner</h1>
     </center>
     <center class="textcenter">
        <ps>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <form class="form-inline textcenter">
        <div class="form-group mx-auto mb-2">
            <input type="search" class="form-control bordertext textseacrh" id="search-input">
            <button type="submit" class="btn btn-warning borderbtn mb-2 my-auto"><i class="fa fa-search"></i></button>
        </div>
        </form>
     </center>
    </div>
</div>

<div class="jumbotron bckrnjmbimg kategori" id="section2">
    <div class="container textkategori">
    <center>
        <h1 class="display-4 my-4 font-page">Kategori</h1>
        <form class="form-inline">
        <div class="form-group mx-auto mb-2">
            <div class="row">
                <div class="col-sm-4">
                    <div class="examp">
                        <a href="<?= base_url('home/kuliner')?>" class="btn rounded-circle borderbtn2 mb-2 my-auto shadow p-3 mb-5 bg-white" >
                            <img src="<?= base_url('assets/')?>pictures/marker_50px.png" alt="">
                        </a>
                        <label for="" class="mt-3">Kuliner Tradisional</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="examp">
                        <a href="<?= base_url('home/maps')?>" class="btn rounded-circle borderbtn2 mb-2 my-auto shadow p-3 mb-5 bg-white">
                                <img src="<?= base_url('assets/')?>pictures/marker_50px.png" alt="">
                            </a>
                        <label for="" class="mt-3">Pedagang Kuliner</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="examp">
                        <a href="<?= base_url('home/kota')?>" class="btn rounded-circle borderbtn2 mb-2 my-auto shadow p-3 mb-5 bg-white"><img src="<?= base_url('assets/')?>pictures/marker_50px.png" alt=""></a>
                        <label for="" class="mt-3">Kabupaten/Kota</label>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </center>

    </div>
</div>

<div class="jumbotron" id="section3">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
             <hr class="my-4">
            </div>
            <div class="col-sm-4">
               <center> <h1 class="display-4 font-page">Recipes</h1></center>
            </div>
            <div class="col-sm-4">
             <hr class="my-4">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <div class="row">
                        <div class="col-sm-6">
                            <img class="d-block w-100 rounded" src="<?= base_url('assets/')?>pictures/jalangkote.jpg" alt="First slide">
                        </div>
                        <div class="col-sm-6">
                                <h1>Jalangkote</h1>
                                <p>Merupakan salah satu jajanan khas yang sering di jumpai di kota Makassar. Jajanan ini merupakan sejenis gorengan berbahan dasar tepung terigu dan berisi ubi jalar,wortel dan bihun.</p>
                                <a href="<?= base_url('home/recipes')?>" class="btn btn-warning text-white mt-3 btn-kuliner">Lihat Resep</a>
                        </div>
                    </div> 
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <img class="d-block w-100" src="<?= base_url('assets/')?>pictures/jalangkote.jpg" alt="Second slide">
                            </div>
                            <div class="col-sm-6">
                                <h1>Jalangkote</h1>
                                    <p>Merupakan salah satu jajanan khas yang sering di jumpai di kota Makassar. Jajanan ini merupakan sejenis gorengan berbahan dasar tepung terigu dan berisi ubi jalar,wortel dan bihun.</p>
                                    <a href="<?= base_url('home/recipes')?>" class="btn btn-warning text-white mt-3 btn-kuliner">Lihat Resep</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <img class="d-block w-100" src="<?= base_url('assets/')?>pictures/jalangkote.jpg" alt="Third slide">
                            </div>
                            <div class="col-sm-6">
                                <h1>Jalangkote</h1>
                                <p>Merupakan salah satu jajanan khas yang sering di jumpai di kota Makassar. Jajanan ini merupakan sejenis gorengan berbahan dasar tepung terigu dan berisi ubi jalar,wortel dan bihun.</p>
                                <a href="<?= base_url('home/recipes')?>" class="btn btn-warning text-white mt-3 btn-kuliner">Lihat Resep</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            </div>
        </div>
    </div>
</div>

<div class="jumbotron jumbotron-fluid bckrnjmb" id="section4">
  <div class="container">
    <center>
        <h1 class="display-4 font-page">About Us</h1>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum asperiores culpa eum est quibusdam autem consequuntur ducimus pariatur? Consequatur accusantium earum dignissimos fuga assumenda culpa a deleniti qui excepturi temporibus.</p>
    </center>
  </div>
</div>

