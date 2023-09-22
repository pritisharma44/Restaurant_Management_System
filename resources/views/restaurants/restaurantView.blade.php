@extends('admin.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Restaurant Single Records</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('restaurants.create') }}">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </a></li>
                        </ol>
                    </div>
                </div>
            </div>

        </section>

        <div class="row">
            <div class="col-md-6 mx-auto">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                          
                            <img class="img-circle"
                                src="{{ asset('storage/' . $viewData->image) }}" height="150" width="250"
                                alt="User profile picture">
                          

                            
                        </div>

                        <h3 class="profile-username text-center">{{ $viewData->name }}</h3>

                        <p class="text-muted text-center">{{ $viewData->address }}</p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Name</b> <a class="float-right">{{ $viewData->name }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Contact no</b> <a class="float-right">{{ $viewData->phone }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Description</b> <a class="float-right">{{ $viewData->description }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Address</b> <a class="float-right">{{ $viewData->address }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Open Time : </b>08:00AM
                            </li>
                            <li class="list-group-item">
                                <b>Close Time : </b>10:00PM
                            </li>
                        </ul>

                        <p class="btn btn-primary"><b>Menu</b></p>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
@endsection
