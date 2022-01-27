@extends('layouts.admin')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Paket Travel &nbsp; <i>{{$item->travel_package->title}}</i></h1>  
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
            <form action="{{route('transaction.update', $item->id)}}" method="POST">
                @csrf 
                @method('PUT')
                <div class="form-group">
                    <label for="transactions_status"></label>
                    <select name="transaction_status" required class="form-control">
                        <option value="{{$item->transaction_status}}">Jangan ubah {{$item->transaction_status}}</option>
                        <option value="IN_CART">In Cart</option>
                        <option value="PENDING">Pending</option>
                        <option value="FAILED">Failed</option>
                        <option value="SUCCESS">Success</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-warning btn-block" > Ubah Data</button>
            </form> 
        </div>

    </div>
</div>
<!-- /.container-fluid -->
@endsection
