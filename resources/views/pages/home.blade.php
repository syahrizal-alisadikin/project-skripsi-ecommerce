@extends('layouts.app', ['titlePage' => 'Ecommerce'])

@section('content-page')
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

@endsection