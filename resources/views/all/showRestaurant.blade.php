@extends('admin.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header bg-light">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Restaurant</h1>
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
        <div class="container">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="card col-lg-8 bg-warning">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6"><img src="{{ asset('upload/restaurant_image/' . $restaurantData->image) }}"
                                    height="250px" width="300px" alt="img"></div>
                            <div class="col-lg-6">
                                <h2>{{ $restaurantData->name }}</h2>
                                <h5>Address : {{ $restaurantData->address }}</h5>
                                 <h5>Description : <small>{{ $restaurantData->description }}</small></h5>
                                <h5>Open : <small>08:00 AM</small></h5>
                                <h5>Close : <small>09:00 PM</h5>
                                <h6>
                                    @foreach ($restaurantData->menu as $val)
                                    Menus :
                                    <a href="{{ route('restData', $val->id) }}"> <a href="{{route('menuItem',$val->id)}}">{{ $val->type }} </a></a>
                                @endforeach
                                </h6>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
