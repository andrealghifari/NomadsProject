@extends('layouts.successlayout')
@section('title', 'Success Page')

@push('addons-style')
<link rel="stylesheet" href="{{url('frontend/styles/success.css')}}" />
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&display=swap" rel="stylesheet"/>
@endpush
    
@section('content')
<main>
    <div class="section-success d-flex align-items-center">
      
      <div class="col text-center">
        <img src="{{url('frontend/images/ic_mail.png')}}" alt="">

        <h1>Yoohoo! <strong> Success</strong></h1>
        <p> We have sent you an email for the instruction <br>
          Have a wonderful trip !
        </p>
        <a href="{{route('Home')}}" class="btn btn-home-page mt-3 px-5">
          Home Page
        </a>
      </div>
    </div>
  </main> 
@endsection

{{-- NO FOOTER --}} 