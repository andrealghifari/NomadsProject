@extends('layouts.admin')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Paket Travel</h1>
        <a href="{{ route('travel-package.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-plus fa-sm text-white-50"></i> Tambah Paket Travel</a>   
    </div> 

 

    {{-- @if ($errors->any())
     @foreach ($errors->all() as $error)
         <div class="alert alert-danger">{{$error}}</div>
     @endforeach
    @endif --}}

      <!-- Content Row -->
    <div class="card-shadow">
        <div class="card-body">
            <form action="{{route('travel-package.store')}}" method="POST">
                @csrf 
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Title" value="{{old('title')}}">
                    @error('title')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control @error ('location') is-invalid @enderror" name="location" placeholder="Location" value="{{old('location')}}">
                    @error('location')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                    </div>

                <div class="form-group">
                    <label for="about">About</label>
                    <textarea name="about" rows="10" class="d-block w-100 form-control @error ('about') is-invalid @enderror" >{{old('about')}}</textarea>
                    @error('about')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="featured_event">Featured Event</label>
                    <input type="text" class="form-control @error ('featured_event') is-invalid @enderror" name="featured_event" placeholder="Featured Event" value="{{ old('featured_event') }}">
                    @error('featured_event')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>                

                <div class="form-group">
                    <label for="language">Language</label>
                    <input type="text" class="form-control @error ('language') is-invalid @enderror" name="language" placeholder="Language" value="{{old('language')}}">
                    @error('language')
                    <div class="invalid-feeback">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="foods">Foods</label>
                    <input type="text" class="form-control @error('foods') is-invalid @enderror" name="foods" placeholder="Foods" value="{{old('foods')}}">
                    @error('foods')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="departure_date">Departure Date</label>
                    <input type="date" class="form-control @error('departure_date') is-invalid @enderror" name="departure_date" placeholder="Departure Date" value="{{ old('departure_date') }}">
                    @error('departure_date')
                    <div class="invalid-feedback">{{$message}}</div>                        
                    @enderror
                </div>

                <div class="form-group">
                    <label for="duration">Duration</label>
                    <input type="text" class="form-control @error('duration') is-invalid @enderror" name="duration" placeholder="Duration" value="{{old('duration')}}">
                    @error('duration')
                    <div class="invalid-feedback"></div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" placeholder="Type" value="{{old('type')}}">
                    @error('type')
                    <div class="invalid-feedback"></div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" placeholder="Price" value="{{old('price')}}">
                    @error('price')
                    <div class="invalid-feedback"></div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-block" > Simpan</button>
            </form> 
        </div>

    </div>
</div>
<!-- /.container-fluid -->
@endsection
