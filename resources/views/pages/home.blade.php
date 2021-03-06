 @extends('layouts.app')

 @section('title')
     Home
 @endsection

 @section('content')
 <div class="page-content page-home">
     <section class="store-carousel">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12" data-aos="zoom-in">
                     <div
                     id="storeCarousel"
                     class="carousel slide"
                     data-ride="carousel"
              >
              <ol class="carousel-indicators">
                  <li
                  data-target="#storeCarousel"
                  data-slide-to="0"
                  class="active"
                  ></li>
                  <li data-target="#storeCarousel" data-slide-to="1"></li>
                  <li data-target="#storeCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img
                        src="/images/banner.jpg"
                        class="d-block w-100"
                        alt="Carousel Image"
                        />
                    </div>
                    <div class="carousel-item">
                        <img
                        src="/images/banner.jpg"
                        class="d-block w-100"
                        alt="Carousel Image"
                        />
                    </div>
                    <div class="carousel-item">
                        <img
                        src="/images/banner.jpg"
                        class="d-block w-100"
                        alt="Carousel Image"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<section class="store-trend-categories">
    <div class="container">
        <div class="row">
            <div class="col-12" data-aos="fade-up">
                <h5> Categories</h5>
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
                    src="/images/categories-gadgets.svg"
                    alt="Gadgets Categories"
                    class="w-100"
                    />
                </div>
                <p class="categories-text">
                    Gadgets
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
                <h5> Products</h5>
            </div>
        </div>
        <div class="row">
            <div
            class="col-6 col-md-4 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="100"
            >
            <a class="component-products d-block" href="/details.html">
                <div class="products-thumbnail">
                    <div
                    class="products-image"
                    style="
                      background-image: url('/images/products-apple-watch.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">
                    Iphone X
                </div>
                <div class="products-price">
                    Rp. 12.000.000
                </div>
            </a>
        </div>
        <div
        class="col-6 col-md-4 col-lg-3"
        data-aos="fade-up"
        data-aos-delay="200"
        >
        <a class="component-products d-block" href="/details.html">
            <div class="products-thumbnail">
                <div
                class="products-image"
                style="
                      background-image: url('/images/products-orange-bogotta.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">
                    Iphone SE
                </div>
                <div class="products-price">
                    Rp. 8.000.000
                </div>
            </a>
        </div>
        <div
        class="col-6 col-md-4 col-lg-3"
        data-aos="fade-up"
        data-aos-delay="300"
        >
        <a class="component-products d-block" href="/details.html">
            <div class="products-thumbnail">
                <div
                class="products-image"
                style="
                      background-image: url('/images/products-sofa-ternyaman.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">
                    Samsung Note 10
                </div>
                <div class="products-price">
                    Rp. 7.000.000
                </div>
            </a>
        </div>
            <div
            class="col-6 col-md-4 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="400"
            >
            <a class="component-products d-block" href="/details.html">
                <div class="products-thumbnail">
                    <div
                    class="products-image"
                    style="
                      background-image: url('/images/products-bubuk-maketti.jpg');
                    "
                  ></div>
                </div>
                <div class="products-text">
                    Iphone 12
                </div>
                <div class="products-price">
                    Rp. 19.000.000
                </div>
            </a>
        </div>
    </div>
</div>
</section>
</div>
@endsection
