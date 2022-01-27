@extends('layouts.admin')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Paket Travel {{$item->location}}</h1>  
    </div> 

    {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}

    @if ($errors->any())
     @foreach ($errors->all() as $error)
         <div>{{$error}}</div>
     @endforeach
    @endif

<!-- Content Row -->
    <div class="card-shadow">
        <div class="card-body">
            <form action="{{route('gallery.update', $item->id)}}" method="POST" enctype="multipart/form-data">
                @csrf 
                @method('PUT')
                <div class="form-group">
                    <label for="location">Paket Travel</label>
                    <select name="travel_packages_id"  required class="form-control">
                        <option value="{{$item->travel_packages_id}}">
                            @foreach ($travel_packages as $travel_package)
                                <option value="{{$travel_package->id}}">{{$travel_package->location}}</option>
                            @endforeach
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image" placeholder="Image">
                </div>
                <button type="submit" class="btn btn-warning btn-block" > Ubah Data</button>
            </form> 
        </div>

    </div>
</div>
<!-- /.container-fluid -->
@endsection
