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

    <!-- Content Row -->
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Location</th>
                            <th>Type</th>
                            <th>Departure Date</th>
                            <th>Price</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                       @forelse ($items as $item)
                       <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->location}}</td>
                        <td>{{$item->type}}</td>
                        <td>{{$item->departure_date}}</td>
                        <td>{{$item->type}}</td>
                        <td>
                            <a href="{{route('travel-package.edit', $item->id)}}" class="btn btn-outline-info">
                            <i class="fa fa-pencil-alt"></i>
                            </a>

                            <form action="{{route('travel-package.destroy',$item->id)}}" method="POST" class="d-inline" >
                                @csrf
                                @method('delete')
                                <button class="btn btn-outline-danger ">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                       </tr>
                       @empty
                           <tr>
                               <td colspan="7" class="text-center"> Data kosong :( </td>
                           </tr>
                       @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection
