<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="{{ asset('assets/style/main.css') }}" rel="stylesheet" />
    <title>Ecommerce!</title>
  </head>
  <body>
    <nav
      class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
      data-aos="fade-down"
    >
      <div class="container">
        <a class="navbar-brand" href="/">
          <!-- <img src="/images/logo.svg" alt="" /> -->
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/categories.html">Categories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Rewards</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/register.html">Sign Up</a>
            </li>
            <li class="nav-item">
              <a
                class="btn btn-success nav-link px-4 text-white"
                href="/login.html"
                >Sign In</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <!-- Page Content -->
 <div class="page-content page-home">
  <section class="store-carousel">
    <div class="container">
      <div class="row">
        <div class="col-lg-12" data-aos="zoom-in">

          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://store.appdev.my.id/storage/sliders/ryojcgPNOd0QqSptsJ7Q9yc7JUqJWPXMx9tsNubw.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://store.appdev.my.id/storage/sliders/ryojcgPNOd0QqSptsJ7Q9yc7JUqJWPXMx9tsNubw.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://store.appdev.my.id/storage/sliders/Z09lTl7YfqOGWbBK9n801YiHBz4VTdLeDJ6jlUm5.png" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="store-trend-categories">
    <div class="container">
      <div class="row">
        <div class="col-12" data-aos="fade-up">
          <h5>Trend Categories</h5>
        </div>
      </div>
      <div class="row">
        <div
          class="col-6 col-md-3 col-lg-2"
          data-aos="fade-up"
          data-aos-delay="100"
        >
          <a class="component-categories d-block" href="#">
            <div class="categories-image">
              <img
                src="https://store.appdev.my.id/storage/categories/qRRJFJydITSIGQMBTKBj6IdlQsu5kR3zp5ucOLid.png"
                alt="Gadgets Categories"
                class="w-100"
              />
            </div>
            <p class="categories-text">
              Gadgets
            </p>
          </a>
        </div>
        <div
          class="col-6 col-md-3 col-lg-2"
          data-aos="fade-up"
          data-aos-delay="200"
        >
          <a class="component-categories d-block" href="#">
            <div class="categories-image">
              <img
                src="https://store.appdev.my.id/storage/categories/qRRJFJydITSIGQMBTKBj6IdlQsu5kR3zp5ucOLid.png"
                alt="Furniture Categories"
                class="w-100"
              />
            </div>
            <p class="categories-text">
              Furniture
            </p>
          </a>
        </div>
        <div
          class="col-6 col-md-3 col-lg-2"
          data-aos="fade-up"
          data-aos-delay="300"
        >
          <a class="component-categories d-block" href="#">
            <div class="categories-image">
              <img
                src="https://store.appdev.my.id/storage/categories/qRRJFJydITSIGQMBTKBj6IdlQsu5kR3zp5ucOLid.png"
                alt="Makeup Categories"
                class="w-100"
              />
            </div>
            <p class="categories-text">
              Makeup
            </p>
          </a>
        </div>
        <div
          class="col-6 col-md-3 col-lg-2"
          data-aos="fade-up"
          data-aos-delay="400"
        >
          <a class="component-categories d-block" href="#">
            <div class="categories-image">
              <img
                src="https://store.appdev.my.id/storage/categories/qRRJFJydITSIGQMBTKBj6IdlQsu5kR3zp5ucOLid.png"
                alt="Sneaker Categories"
                class="w-100"
              />
            </div>
            <p class="categories-text">
              Sneaker
            </p>
          </a>
        </div>
        <div
          class="col-6 col-md-3 col-lg-2"
          data-aos="fade-up"
          data-aos-delay="500"
        >
          <a class="component-categories d-block" href="#">
            <div class="categories-image">
              <img
                src="https://store.appdev.my.id/storage/categories/qRRJFJydITSIGQMBTKBj6IdlQsu5kR3zp5ucOLid.png"
                alt="Tools Categories"
                class="w-100"
              />
            </div>
            <p class="categories-text">
              Tools
            </p>
          </a>
        </div>
        <div
          class="col-6 col-md-3 col-lg-2"
          data-aos="fade-up"
          data-aos-delay="600"
        >
          <a class="component-categories d-block" href="#">
            <div class="categories-image">
              <img
                src="https://store.appdev.my.id/storage/categories/qRRJFJydITSIGQMBTKBj6IdlQsu5kR3zp5ucOLid.png"
                alt="Baby Categories"
                class="w-100"
              />
            </div>
            <p class="categories-text">
              Baby
            </p>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="store-new-products">
    <div class="container">
      <div class="row">
        <div class="col-12" data-aos="fade-up">
          <h5>New Products</h5>
        </div>
      </div>
      <div class="row">
        <div
          class="col-6 col-md-4 col-lg-3"
          data-aos="fade-up"
          data-aos-delay="100"
        >
       
          <div class="card border-0 shadow rounded-md">
            <div class="card-image">
              <img src="https://store.appdev.my.id/storage/products/YL0t4nMXdKVXjczVipSw4GhNllAc5DR0p4H4L1Ny.jpeg" class="w-100" style="height: 15em; object-fit: cover; border-top-left-radius: 0.25rem; border-top-right-radius: 0.25rem;">
            </div>
            <div class="card-body">
              <a href="/product/macbook-pro-16-m1-max" class="card-title font-weight-bold" style="font-size: 20px;">Macbook Pro 16</a>
             
              <div class="price font-weight-bold mt-2" > Rp. 38.000.000</div>
              <a href="/product/macbook-pro-16-m1-max" class="btn btn-primary btn-md mt-3 btn-block shadow-md">LIHAT PRODUK</a>
            </div>
          </div>
         
        </div>
        
       
      </div>
    </div>
  </section>
</div>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <p class="pt-4 pb-2">
          2019 Copyright Store. All Rights Reserved.
        </p>
      </div>
    </div>
  </div>
</footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/vendor/script/navbar-scroll.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init({
      once: true
    });
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>