@extends('admin.master')
@section('content')
    ;
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Restaurant Info</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('restaurants.index') }}">
                                    <button type="submit" class="btn btn-primary">Show Data</button>
                                </a></li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Quick Example <small>jQuery Validation</small></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form id="quickForm"
                                action="{{ $restaurant ? route('restaurants.update', $restaurant->id) : route('restaurants.store') }}"
                                method="post" enctype="multipart/form-data">
                                @csrf
                                @if ($restaurant)
                                    @method('put')
                                @endif
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="exampleInputName">Name </label>
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror" id="exampleInputName"
                                            placeholder="Enter name" value="{{ $restaurant ? $restaurant->name : '' }}">
                                        @error('name')
                                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" rows="3" placeholder="Enter ..."
                                            name="description">{{ $restaurant ? $restaurant->description : '' }}</textarea>
                                        @error('description')
                                            <span id="description-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputNumber">Contact No. </label>
                                        <input type="number" name="phone"
                                            class="form-control @error('phone') is-invalid @enderror"
                                            id="exampleInputNumber" placeholder="Enter contact number"
                                            value="{{ $restaurant ? $restaurant->phone : '' }}">
                                        @error('phone')
                                            <span id="number-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    
                                        <div class="form-group">
                                            <label for="bimage">Image </label>
                                            <input type="file" name="image"
                                                value="{{ $restaurant ? $restaurant->image : '' }}"
                                                class="form-control @error('image') is-invalid @enderror"
                                                id="exampleInputFile">
                                            @error('image')
                                                <span id="title-error"
                                                    class="error invalid-feedback">{{ $message }}</span>
                                            @enderror

                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <textarea class="form-control @error('address') is-invalid @enderror" rows="3" placeholder="Enter ..."
                                            name="address">{{ $restaurant ? $restaurant->address : '' }}</textarea>
                                        @error('address')
                                            <span id="address-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>


                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-6">

                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
