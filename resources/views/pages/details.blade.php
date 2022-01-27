@extends('layouts.app')
@section('title','Details Travel')

@push('prepend-style')
<link rel="stylesheet" href="{{url('frontend/libraries/jquery/xZoom/dist/xzoom.css')}}">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{url('frontend/styles/details.css')}}" />
@endpush

@section('content')
<main>
    <section class="section-details-header">
    </section>
    <section class="section-details-content">
      <div class="container">
        <div class="row">
          <div class="col p-0">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"> Paket Travel</li>
                <li class="breadcrumb-item active">
                  Details
                </li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 pl-lg-0">
            <div class="card card-details">
              <h1>{{$item->title}}</h1>
              <p>{{$item->location}}</p>
              <div class="gallery">
                <div class="xzoom-container">
                  <img src="frontend/images/details_page/bigcapture.jpg" alt=" Nusa Penida Island" class="xzoom"
                    id="xzoom-default" xoriginal="frontend/images/details_page/bigcapture.jpg">
                </div>
                <div class="xzoom-thumbs">
                  <a href="frontend/images/details_page/jumbotron1.jpg">
                    <img src="frontend/images/details_page/jumbotron1.jpg" alt="" class="xzoom-gallery" width="128"
                      xpreview="frontend/images/details_page/jumbotron1.jpg">
                  </a>
                  <a href="frontend/images/details_page/jumbotron2.jpg">
                    <img src="frontend/images/details_page/jumbotron2.jpg" alt="" class="xzoom-gallery" width="128"
                      xpreview="frontend/images/details_page/jumbotron2.jpg">
                  </a>
                  <a href="frontend/images/details_page/jumbotron3.jpg">
                    <img src="frontend/images/details_page/jumbotron3.jpg" alt="" class="xzoom-gallery" width="128"
                      xpreview="frontend/images/details_page/jumbotron3.jpg">
                  </a>
                  <a href="frontend/images/details_page/jumbotron4.jpg">
                    <img src="frontend/images/details_page/jumbotron4.jpg" alt="" class="xzoom-gallery" width="128"
                      xpreview="frontend/images/details_page/jumbotron4.jpg">
                  </a>
                  <a href="frontend/images/details_page/jumbotron5.jpg">
                    <img src="frontend/images/details_page/jumbotron5.jpg" alt="" class="xzoom-gallery" width="128"
                      xpreview="frontend/images/details_page/jumbotron5.jpg">
                  </a>
                </div>
              </div>
              <h2>Tentang Wisata</h2>
              <p>Nusa Penida is an island South-East of the Indonesian island Bali. It only takes a thirty minute boat
                ride from Bali.
                The island’s landscape is wonderful, the diving spots are world class and its people are very welcoming.
                Until recently, the island was still relatively unknown by tourists.
              </p>
              <p>Nusa Penida island belongs to the Bali province in Indonesia.
                It has a population of around 45,000 inhabitants and covers about 200 km
               <sup>2</sup> .
              </p>
              <div class="features row">
                <div class="col-md-4">
                  <div class="description">
                    <img src="frontend/images/icons/ic_event.png" alt="" class="features-image">
                  </div>
                  <div class="description">
                    <h3>Featured Event</h3>
                    <p>Tari Kecak</p>
                  </div>
                </div>
                <div class="col-md-4 border-left ">
                  <!-- Border left digunakan untuk membuat garis pembatas card -->
                  <div class="description">
                    <img src="frontend/images/icons/ic_bahasa.png" alt="" class="features-image">

                  </div>
                  <div class="description">
                    <h3>Language</h3>
                    <p>English</p>
                  </div>
                </div>
                <div class="col-md-4 border-left ">
                  <div class="description">
                    <img src="frontend/images/icons/ic_foods.png" alt="" class="features-image">

                  </div>
                  <div class="description">
                    <h3>Foods</h3>
                    <p>Domestic Foods</p>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-lg-4">
            <div class="card card-details card-right">
              <h2>Active Members</h2>
              <div class="members my-2">
                <img src="frontend/images/details_page/profile 1.png" alt="" class="members-image">
                <img src="frontend/images/details_page/profile 2.png" alt="" class="members-image">
                <img src="frontend/images/details_page/profile 3.png" alt="" class="members-image">
                <img src="frontend/images/details_page/profile 4.png" alt="" class="members-image">
                <img src="frontend/images/details_page/profile 5.png" alt="" class="members-image">
              </div>
              <hr>
              <h2>Trip Information</h2>
              <table class="trip-information">                                                                                                                                                     
                <tr>
                  <th width="50%" class="text-left">Date of Departure</th>
                  <td width="50%" class="text-right">22, December 2021</td>
                </tr>
                <tr>
                  <th width="50%" class="text-left">Flight</th>
                  <td width="50%" class="text-right">3D 4N</td>
                </tr>
                <tr>
                  <th width="50%" class="text-left">Type of Trip</th>
                  <td width="50%" class="text-right">Open Trip</td>
                </tr>
                <tr>
                  <th width="50%" class="text-left">Price</th>
                  <td width="50%" class="text-right">$75.00/person</td>
                </tr>
              </table>
            </div>
            <div class="join-container">
              <a href="{{route('Checkout')}}" class="btn btn-block btn-join-now mt-3 py-2">
                Join Trip
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
</main>
@endsection
@push('addons-script')
  <script src="{{url('frontend/libraries/jquery/xZoom/dist/xzoom.min.js')}}"></script>
  <script>
    $(document).ready(function () {
      $('.xzoom, .xzoom-gallery').xzoom({
        zoomWidth: 500,
        title: false,
        tint: '#333',
        Xoffset: 15
      });
    });
  </script>        
@endpush