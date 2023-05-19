<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Rent Book</title>
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-dark navbar-expand-lg" style="background-color: #277BC0">
  <div class="container">
    <a class="navbar-brand" href="#">
      <h2>Rent Books</h2>
    </a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Comic</a></li>
            <li><a class="dropdown-item" href="#">Novel</a></li>
            <li><a class="dropdown-item" href="#">History</a></li>
          </ul>
        </li>
        <li class="nav-item">
        <a class="btn btn-outline-light" href="{{route('login')}}">Login</a>
      </li>
      </ul>
    </div>
  </div>
</nav> 
<!--Akhir navbar-->

<!-- carousel -->
<div id="carouselExampleIndicators" class="carousel slide" style="max-height: 500px; max-width: 100%" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://i.pinimg.com/564x/3e/8d/ec/3e8decb97e13d4974badee9862880f2f.jpg" class="d-block w-100 " alt="..." style="max-height: 400px;">
    </div>
    <div class="carousel-item active">
      <img src="https://i.pinimg.com/564x/a7/eb/14/a7eb14d25bdffbb0fff32bab31be1fad.jpg" class="d-block w-100" alt="..." style="max-height: 400px">
    </div>
    <div class="carousel-item">
      <img src="https://i.pinimg.com/564x/d4/07/ce/d407ceac9fad7f048670db14427b5ad3.jpg" class="d-block w-100" alt="..." style="max-height: 400px">
    </div>
  </div>
  <button class="carousel-control-prev w-25" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next w-25" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- end carousel -->

<!-- jumbotron -->
    <div class="container">
        <div class="section-title d-flex justify-content-center mt-5">
            <h2>Rent Books</h2>
        </div>
        <div class="row me-5 p-5">
          <div class="col-md-4 mt-5 ms-5">
            <a href="{{route('register')}}" class="btn btn-outline-primary">Daftar Sekarang</a>
          </div>
          <div class="col-lg-7 mt-4">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore fugit porro eaque placeat ea doloremque iusto at odit expedita molestias, cum iure eligendi ipsum aliquam, quod, molestiae rerum beatae? Quaerat.
            </p>
          </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="section-title d-flex justify-content-center mt-5">
            <h2>Popular Books</h2>
            </div>
        <div class="col-md-3 d-flex align-items-stretch mt-4 me-4 ms-4">
        <div class="card" style="width: 18rem;">
            <img src="https://tse4.mm.bing.net/th?id=OIP.p_VJ5zVvSQPibiNcPPOKkwHaLS&pid=Api&P=0" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Goblet of fire</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary col-12">Read</a>
            </div>
        </div>
        </div>
        
        <div class="col-md-3 d-flex align-items-stretch mt-4 me-4 ms-5">
        <div class="card" style="width: 18rem;">
            <img src="https://tse1.mm.bing.net/th?id=OIP.H81eRJmkMu_b4Z-6yvlE9QHaLS&pid=Api&P=0" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">The sorcerers stone</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary col-12">Read</a>
            </div>
        </div>
        </div>

       <div class="col-md-3 d-flex align-items-stretch mt-4 me-4 ms-5">
       <div class="card" style="width: 18rem;">
            <img src="https://i1.wp.com/geekdad.com/wp-content/uploads/2013/07/hpnc6.jpg?resize=1575%2C2400&ssl=1" class="card-img-top" alt="...">
            <div class="card-body">
                  <h5 class="card-title">Half Boold Prince</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary col-12">Read</a>
            </div>
        </div>
       </div>
        </div>
    </div>
<!-- end jumbotron -->

<!-- Message -->
    <div class="container">
        <div class="section-title d-flex justify-content-center mt-5">
            <h2>Message</h2>
        </div>
        <form action="{{route('message.store')}}" method="POST" class="row g-3 mt-5 d-flex justify-content-center">
          @csrf
        <div class="col-md-8">
          <input type="text" class="form-control" placeholder="Email" aria-label="Email" name="email">
        </div>
            <div class="col-md-8">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="message"></textarea>
                <label for="floatingTextarea2">Message</label>
            </div>
            </div>
            <div class="col-md-8 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary col-4">Send</button>
            </div>
        </form>
    </div>
<!-- End Message -->
<!-- footer -->
    <footer class="mt-3" style="height: 70px; background-color: #277BC0">
    <div class="container d-flex justify-content-center">
      <div class="copyright p-3">
        &copy; Copyright <strong><span>Galih Ikhtiar</span></strong>. All Rights Reserved
      </div>
    </div>
    </footer>
<!-- End Footer -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>