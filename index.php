<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- css kink -->
<link rel="stylesheet" href="styli.css">
  <!-- bootstrap link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- navbar/////// -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class=" asif navbar-brand" href="#">asif tecnical</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">contact</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!-- carasol//// -->
<!-- carasol//// -->
<!-- carasol//// -->
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="natcher-img/(3)nt.jpg" alt="img" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="natcher-img/(4)jpg.jpg" alt="img" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="natcher-img/(5).jpg" alt="img" width="1100" height="500">
      <div class="ncarousel-caption">
        <!-- <h3>New York</h3> -->
        <!-- <p>We love the Big Apple!</p> -->
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<!-- about us//// -->
<!-- about us//// -->
<!-- about us//// -->
<section class="my-3">
    <div class="py-3">
        <h2 class="text-center">about us</h2>
    </div>
     <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <img class="img-fluid about.img" src="natcher-img/(6).jpg" alt="n-img">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <h2 class="display-4">i am asif tecnical</h2>
                <p class="py-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla quasi voluptate neque quod, possimus saepe asperiores, repellendus officiis nihil illo, laborum tempore praesentium! Nisi, accusantium illo! Repellendus rem eum ex.</p>
                <a href="about.php" class="btn btn-success">check me</a>
            </div>
        </div>
    </div>
    </section>
<!-- our servicis//// -->
<!-- our servicis//// -->
<!-- our servicis//// -->
    <section>
    <div class="py-3">
        <h2 class="text-center">our services</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
  <img class="card-img-top" src="natcher-img/7.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">(:beautyfull natcher:)</h4>
    <p class="card-text">(:this is a beautyfull natcher:).</p>
    <a href="#" class="btn btn-success">See Profile</a>
  </div>
</div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
  <img class="card-img-top" src="natcher-img/7.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">(:beautyfull natcher:)</h4>
    <p class="card-text">(:this is a beautyfull natcher:).</p>
    <a href="#" class="btn btn-success">See Profile</a>
  </div>
</div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
  <img class="card-img-top" src="natcher-img/7.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">(:beautyfull natcher:)</h4>
    <p class="card-text">(:this is a beautyfull natcher:).</p>
    <a href="#" class="btn btn-success">See Profile</a>
  </div>
</div>
            </div>
        </div>
    </div>
</section>

<!-- our galary/// -->
<!-- our galary/// -->
<!-- our galary/// -->
<section>
    <div class="py-3">
        <h2 class="text-center">our gallary</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img class="img-fluid pb-4" src="natcher-img/(3)nt.jpg" alt="img">
            </div>
             <div class="col-lg-4 col-md-4 col-12">
                <img class="img-fluid pb-4" src="natcher-img/(3)nt.jpg" alt="img">
            </div> 
            <div class="col-lg-4 col-md-4 col-12">
                <img class="img-fluid pb-4" src="natcher-img/(3)nt.jpg" alt="img">
            </div> <div class="col-lg-4 col-md-4 col-12">
                <img class="img-fluid pb-4" src="natcher-img/(3)nt.jpg" alt="img">
            </div>
             <div class="col-lg-4 col-md-4 col-12">
                <img class="img-fluid pb-4" src="natcher-img/(3)nt.jpg" alt="img">
            </div>
             <div class="col-lg-4 col-md-4 col-12">
                <img class="img-fluid pb-4" src="natcher-img/(3)nt.jpg" alt="img">
            </div>
             <div class="col-lg-4 col-md-4 col-12">
                <img class="img-fluid pb-4" src="natcher-img/(3)nt.jpg" alt="img">
            </div> 
            <div class="col-lg-4 col-md-4 col-12">
                <img class="img-fluid pb-4" src="natcher-img/(3)nt.jpg" alt="img">
            </div> 
            <div class="col-lg-4 col-md-4 col-12">
                <img class="img-fluid pb-4" src="natcher-img/(3)nt.jpg" alt="img">
            </div>
        </div>
    </div>

</section>
<!-- our galary/// -->
<!-- our galary/// -->
<section>
    <div class="py-3">
        <h2 class="text-center">contecat</h2>
    </div>
    <div class="w-50 m-auto">

        <form action="userinfo.php" method="post">
            <div class="form-group">
                <label>name</label>
                <input type="text" name="name" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>email</label>
                <input type="text" name="email" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>mobile</label>
                <input type="text" name="mobile" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>comints</label>
                <textarea class="form-control" name="comints"></textarea>
                <br>
                <button type="submit" class="btn btn-success">submit</button>
            </div>
        </form>
    </div>
<!-- footer/// -->
<!-- footer/// -->
<!-- footer/// -->
<footer>
    <h3 class="p-3 bg-dark text-white text-center">(:@asif raza tecnical paroduction:)</h3>
</footer>


        
     

</section>





   









<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>