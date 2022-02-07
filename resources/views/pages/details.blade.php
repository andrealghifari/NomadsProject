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

              @if ($item->galleries->count()>0)
                  <div class="gallery">
                      <div class="xzoom-container">
                        <img src="{{Storage::url($item->galleries->first()->image)}}"
                         class="xzoom" 
                         alt="" 
                        id="xzoom-default" 
                        xoriginal="{{Storage::url($item->galleries->first()->image)}}">
                      </div>
                      {{--Salah disini --}}
                      <div class="xzoom-thumbs">
                        @foreach ($item->galleries as $gallery)
                            <a href="{{Storage::url($gallery->image)}}">
                              <img src="{{Storage::url($gallery->image)}}" class="xzoom-gallery" width="128" xpreview="{{Storage::url($gallery->image)}}">
                            </a>
                        @endforeach
                      </div>
                </div>
              @endif
                {{-- <div class="xzoom-container">
                  {{-- <img src="frontend/images/details_page/bigcapture.jpg" alt=" Nusa Penida Island" class="xzoom"
                    id="xzoom-default" xoriginal="frontend/images/details_page/bigcapture.jpg"> 
                    </div>
                    --}}
               
              <h2>Tentang Wisata</h2>
              {!! $item->about !!}
            
              <div class="features row">
                <div class="col-md-4">
                  <div class="description">
                    <img src="{{url('frontend/images/icons/ic_event.png')}}" alt="" class="features-image">
                  </div>
                  <div class="description">
                    <h3>Featured Event</h3>
                    <p>{{$item->featured_event}}</p>
                  </div>
                </div>
                <div class="col-md-4 border-left ">
                  <!-- Border left digunakan untuk membuat garis pembatas card -->
                  <div class="description">
                    <img src="{{url('frontend/images/icons/ic_bahasa.png')}}" alt="" class="features-image">

                  </div>
                  <div class="description">
                    <h3>Language</h3>
                    <p>{{$item->language}}</p>
                  </div>
                </div>
                <div class="col-md-4 border-left ">
                  <div class="description">
                    <img src="{{url('frontend/images/icons/ic_foods.png')}}" alt="" class="features-image">

                  </div>
                  <div class="description">
                    <h3>Foods</h3>
                    <p>{{$item->local_foods}}</p>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-lg-4">
            <div class="card card-details card-right">
              <h2>Active Members</h2>
              <div class="members my-2">
                <img src="{{url('frontend/images/details_page/profile 1.png')}}" alt="" class="members-image">
                <img src="{{url('frontend/images/details_page/profile 2.png')}}" alt="" class="members-image">
                <img src="{{url('frontend/images/details_page/profile 3.png')}}" alt="" class="members-image">
                <img src="{{url('frontend/images/details_page/profile 4.png')}}" alt="" class="members-image">
                <img src="{{url('frontend/images/details_page/profile 5.png')}}" alt="" class="members-image">
              </div>
              <hr>
              <h2>Trip Information</h2>
              <table class="trip-information">                                                                                                                                                     
                <tr>
                  <th width="50%" class="text-left">Date of Departure</th>
                  <td width="50%" class="text-right">
                    {{ \Carbon\Carbon::create($item->date_of_departure)->format('F n, Y')}}
                  </td>
                </tr>
                <tr>
                  <th width="50%" class="text-left">Flight Duration</th>
                  <td width="50%" class="text-right">{{$item->duration}}</td>
                </tr>
                <tr>
                  <th width="50%" class="text-left">Type of Trip</th>
                  <td width="50%" class="text-right">{{$item->type}}</td>
                </tr>
                <tr>
                  <th width="50%" class="text-left">Price</th>
                  <td width="50%" class="text-right">{{$item->price}},00/person</td>
                </tr>
              </table>
            </div>
            <div class="join-container">
             @auth
                <form action="" method="post">
                  <button class="btn-block btn-join-now mt-3 py-2" type="submit">
                    
                  </button>
                </form>
             @endauth
             @guest
                 
             @endguest
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