@extends('layouts.admin')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Paket Travel</h1>
        <a href="{{ route('gallery.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-plus fa-sm text-white-50"></i> Tambah Paket Travel</a>   
    </div> 

    <!-- Content Row -->
    @if ($errors->any())
     @foreach ($errors->all() as $error)
         <div>{{$error}}</div>
     @endforeach
    @endif

    <div class="card-shadow">
        <div class="card-body">
            <form action="{{route('gallery.store')}}" method="post" enctype="multipart/form-data">
                @csrf 
                <div class="form-group">
                    <label for="location">Travel Packages</label>
                    <select name="travel_packages_id" required class="form-control">
                        <option value="">Select data</option>
                        @foreach ($travel_packages as $travel_package)
                            <option value="{{$travel_package->id}}">{{$travel_package->location}}</option>
                        @endforeach
                        
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control" placeholder="Insert an image">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Save</button>
            </form> 
        </div>

    </div>
</div>
<!-- /.container-fluid -->
@endsection
