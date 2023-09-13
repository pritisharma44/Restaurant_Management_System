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
                        <h1>Menu Items</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('items.index') }}">
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
                                <h3 class="card-title">Menu Items</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form id="quickForm" action="{{$item ? route('items.update',$item->id) : route('items.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @if($item)
                                @method('put')
                                @endif
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="exampleInputName">Name </label>
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror" id="exampleInputName"
                                            placeholder="Enter name" value="{{$item ? $item->name : ''}}">
                                             @error('name')
                                            <span id="file-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName">Menu</label>
                                        <select class="form-control @error('menu_id') is-invalid @enderror" rows="3" name="menu_id">
                                            <option value="">--Select Menu--</option>
                                            @foreach ($Menu as $menu)
                                                <option value="{{ $menu->id }}">{{ $menu->type }}</option>
                                            @endforeach
                                        </select>
                                        @error('menu_id')
                                            <span id="file-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputName">Price </label>
                                        <input type="text" name="price"
                                            class="form-control @error('price') is-invalid @enderror" id="exampleInputName"
                                            placeholder="Enter name" value="{{$item ? $item->price : ''}}">
                                        @error('price')
                                            <span id="file-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="bimage">Image</label>

                                        <input type="file" class="form-control @error('image') is-invalid @enderror"
                                            id="exampleInputFile" name="image" value="{{$item ? $item->image : ''}}">

                                        @error('image')
                                            <span id="file-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName">Discount </label>
                                        <input type="text" name="discount"
                                            class="form-control @error('discount') is-invalid @enderror" id="exampleInputName"
                                            placeholder="Enter name" value="{{$item ? $item->discount : ''}}">
                                        @error('discount')
                                            <span id="file-error" class="error invalid-feedback">{{ $message }}</span>
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
