@extends('layouts.app')

@section('title','Home Page')

    
@section('content')
<header class="text-center">
    <h1>
      Explore Vast Destination 
      <br>
      Around the World
    </h1>
    <p class="mt-3">
      Visit beautiful places with just oneclick
      <br>
      get many benefits even extra credit!
    </p>
    <a href="#popular" class="btn btn-get-started px-4 mt-4">
      Get Started
    </a>
  </header>    

  <!-- MAIN CONTENT -->
  <!-- Statisctics -->
  <main>
    <div class="container">
      <section class="section-stats row justify-content-center" id="stats">
        <div class="col-3 col-md-2 stats-detail">
          <h2>80K</h2>
          <p>Members</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>2K</h2>
          <p>Countries</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>3K</h2>
          <p>Hotels</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>72</h2>
          <p>Partners</p>
        </div>
      </section> 
    </div>

    <section class="section-popular" id="popular">
      <div class="container">
        <div class="row">
          <div class="col text-center section-popular-heading">
            <h2>Wisata Popular</h2>
            <p>Discover many places full of joy
              <br>
              Travel with family, relatives or your loved one </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section-popular-content" id="popularcontent">
      <div class="container">
        <div class="section-popular-travel row justify-content-center">
          @foreach ($items as $item)
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column" style="background-image:
            url('{{$item->galleries->count() ? Storage::url($item->galleries->first()->image): ''}}');">
              <div class="travel-country">{{$item->title}}</div>
              <div class="travel-location">{{$item->location}}</div>
              <div class="travel-button mt-auto">
                <a href="{{route('Details', $item->slug)}}" class="btn btn-travel-details px-4">
                  View Details
                </a>
              </div>
            </div>
          </div>

          {{-- <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column" style="background-image:url('frontend/images/picture2.jpg')">
              <div class="travel-country">TURKEY</div>
              <div class="travel-location">CAPPADOCIA</div>
              <div class="travel-button mt-auto">
                <a href="javascript:alert('Under construction');" class="btn btn-travel-details px-4">
                  View Details
                </a>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column" style="background-image:url('frontend/images/picture3.jpg')">
              <div class="travel-country">UAE</div>
              <div class="travel-location">DUBAI</div>
              <div class="travel-button mt-auto">
                <a href="javascript:alert('Under construction');" class="btn btn-travel-details px-4">
                  View Details
                </a>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column" style="background-image:url('frontend/images/picture4.jpg')">
              <div class="travel-country">HONGKONG</div>
              <div class="travel-location">SHANGHAI</div>
              <div class="travel-button mt-auto">
                <a href="javascript:alert('Under construction');" class="btn btn-travel-details px-4">
                  View Details
                </a>
              </div>
            </div>
          </div> --}}
          @endforeach
        </div>
      </div>
    </section>
    <section class="section-networks">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2>
              Our Partners
            </h2>
            <p>We have been trusted for years<br>by Uniqorn and Enterprise</p>
          </div>
          <div class="col-md-8 text-center">
            <img src="{{url('frontend/images/partners.jpg')}}" alt="logo partner" class="img-partner">
          </div>
        </div>
      </div>
    </section>
    <section class="section-testimonial-heading" id="testimonialHeading">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h2>They Are Loving Us</h2>
            <p>Moments were giving them <br> the best experience!</p>
          </div>
        </div>
      </div>
    </section>
    <section class="section-testimonial-content" id="testimonialContent">
      <div class="container">
        <div class="section-popular-travel row justify-content-center">
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
                <img src="{{url('frontend/images/testimonial1.jpg')}}" alt="testimonial1" class="mb-4 rounded-circle">
                <h3 class="mb-4">Andre Alghifari</h3>
                <p class="testimonial">
                  " It was  awesomesauce,<br> 
                  I couldn't stop saying  Wohooo <br>
                  for every single moment <br>
                  Terimakasih banyak "
                </p>
              </div>
              <hr>
              <p class="trip-to mt-2">Trip to Cappadocia, Turkey
              </p>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
                <img src="{{url('frontend/images/testimonial2.jpg')}}" alt="testimonial2" class="mb-4 rounded-circle">
                <h3 class="mb-4">Nazlı İleri</h3>
                <p class="testimonial">
                  " Wonderful of Indonesia ! <br>
                  beautiful unforgotten moments  <br>
                  ~ honeymoon avenue <br>
                  Çok teşekkürler Nomads "
                </p>
              </div>
              <hr>
              <p class="trip-to mt-2">Trip to Ubud, Bali
              </p>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
                <img src="{{url('frontend/images/testimonial3.jpg')}}" alt="testimonial3" class="mb-4 rounded-circle">
                <h3 class="mb-4">Aslı Su</h3>
                <p class="testimonial">
                  " I really like travelling, but never had <br>
                  such a remarkable experience with family <br>
                  Wonderful! <br>
                  Gracias Nomads :) "
                </p>
              </div>
              <hr>
              <p class="trip-to mt-2">Trip to Shanghai, China
              </p>
            </div>
          </div>
        </div>
        <div class="row"></div>
      </div>
    </section>
  </main>

@endsection