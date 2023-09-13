@extends('admin.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header bg-light">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>All Items</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <div class="row">
            <div class="col-md-6 mx-auto">

                <div class="col-lg-6">
                    <div class="card-body">
                         @foreach ($items as $val)
                            <div>
                                <img src="{{ asset('upload/menuItem_image/' . $val->image) }}" height="250px" width="250px" alt="">
                                <p>{{ $val->name }} </p>
                                <p>Price : {{ $val->price }}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection







