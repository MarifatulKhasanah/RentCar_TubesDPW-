@extends('layouts.frontend')
@section('content')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>About Us - Drivvy</title>
    <!-- Favicon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="{{asset('assets/logo.html')}}" />
    <!-- Bootstrap icons-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Core theme CSS (includes Bootstrap)-->
    <!-- <link href="{{asset('frontend/css/styles.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="({{asset('frontend/css/custom.css')}})" /> -->
  </head>
  <body>
    <div class="backgroundHero"></div>
    
    <!-- Section-->
      <div class="container">
          <div class="row hero">
              <div class="col-md-5 textHero">
                <h1>Exploring a new destination? 
                  <span><br>Rent a car and travel at your own pace!</span></h1>
                  <p>"Discover freedom in exploration! Rent a car for a personalized journey through new destinations, 
                    <br>where you set the pace of your adventure."<br>
                     </p>
                  <a href="index.html" class="btn btn-primary btnGetStarted shadow-none">Rent Now!</a>
              </div>
              <div class="col-md-7 imageHero">
                  <img class="img-fluid" src="{{asset('frontend/assets/car.png')}}" alt="hero image">
              </div>
          </div>
      </div>
  </section>

  <section id="services"> 
    <div class="container">
        <div class="row">
            <div class="col-md-5 imageServices">
                <div class="col-md-6 covs">
                    <div class="row">
                        <img class="cov3 img-fluid" src="{{asset('frontend/assets/cover3.jpg')}}" alt="sofa1">
                    </div>
                    <div class="row">
                        <img class="cov2 img-fluid" src="{{asset('frontend/assets/cover2.jpg')}}" alt="sofa2">
                    </div>
                    <img class="cov1 img-fluid" src="{{asset('frontend/assets/cover1.jpg')}}" alt="lamp">
                </div>
            </div>
            <div class="col-md-6 textServices">
                <h1>Drivvy</h1>
                <p>Drivy is a car rental company that was founded in 2023. We are  
                  <br>committed to providing our customers with a convenient and 
                  <br>affordable way to rent a car. We are always committed to :</p>
                <ul>
                    <li>Offering budget-friendly car rentals</li>
                    <li>Delivering excellent customer service</li>
                    <li>Ensuring convenient car rentals for our customers</li>
                </ul>
            </div>
        </div>
    </div>
</section>
    <section id="testimoni">
          <div class="container">
              <div class="row">
      <div class="row d-flex justify-content-center">
        <div class="col-md-10 col-xl-8 text-center">
          <h3 class="mb-4">Testimonials</h3>
        </div>
      </div>

      <div class="row text-center">
        <div class="col-md-4 mb-5 mb-md-0">
          <div class="d-flex justify-content-center mb-4">
            <img src="assets/person1.jpg"
              class="rounded-circle shadow-1-strong" width="150" height="150" />
          </div>
          <h5 class="mb-3">Marco Naratama</h5>
          <p class="px-xl-3">
            "I had a great experience with Drivvy's car rental service. The staff was friendly, and 
            the process was efficient. Driving one of their well maintained cars added a lot of 
            comfort to my travel. Definitely my go to choice for rentals!"
          </p>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          </div>
        <div class="col-md-4 mb-5 mb-md-0">
          <div class="d-flex justify-content-center mb-4">
            <img src="assets/person2.jpg"
              class="rounded-circle shadow-1-strong" width="150" height="150" />
          </div>
          <h5 class="mb-3">Naura Celine</h5>
          <p class="px-xl-3">
            Exceptional service from Drivvy! Renting a car was quick and easy, and the vehicle was clean and comfortable. 
            Their commitment to convenience made our journey memorable.
          </p>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          </div>
        <div class="col-md-4 mb-5 mb-md-0">
            <div class="d-flex justify-content-center mb-4">
                <img src="assets/person3.jpg"
                class="rounded-circle shadow-1-strong" width="150" height="150" />
          </div>
          <h5 class="mb-3">Javier Kana</h5>
          <p class="px-xl-3">
            Drivvy made our road trip a breeze! The rental process was seamless, and the car was in top-notch condition. 
            Highly recommended for a hassle-free travel experience!
          </p>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          </div>
      </div>
    </section>
    <script src="{{ asset('frontend/js/bootstrap.js') }}"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('frontend/js/scripts.js') }}"></script>
  </body>
</html>
@endsection