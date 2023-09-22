@extends('admin.master')
@section('content')
    <h1>Hello</h1>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Menu</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">
                                    <button type="submit" class="btn btn-primary">Show List</button>
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
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">ToDo </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ $menu ? route('menus.update', $menu->id) : route('menus.store') }}"
                                    method="post">
                                    @csrf
                                    @if ($menu)
                                        @method('put')
                                    @endif
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Type</label>
                                                <select class="form-control  @error('type') is-invalid @enderror"
                                                    rows="3" name="type">
                                                    <option value="">--Select--</option>
                                                    <option>Breakfast</option>
                                                    <option>Lunch</option>
                                                    <option>Dinner</option>
                                                </select>
                                                @error('type')
                                                    <span id="priority-error"
                                                        class="error invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Strat Date</label>
                                                <input type="date"
                                                    class="form-control  @error('start_date') is-invalid @enderror"
                                                    placeholder="Enter ..." name="start_date"
                                                    value="{{ $menu ? $menu->start_date : '' }}">
                                                @error('start_date')
                                                    <span id="date-error"
                                                        class="error invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="exampleInputName">Restaurant</label>
                                                <select class="form-control  @error('restaurant_name') is-invalid @enderror" rows="3" name="restaurant_name">
                                                    <option value="">--Select Restaurant--</option>
                                                    @foreach ($Data as $restaurant)
                                                        <option value="{{ $restaurant->id }}">{{ $restaurant->name }}</option>
                                                    @endforeach
                                                </select>
                                                 @error('restaurant_name')
                                                    <span id="date-error"
                                                        class="error invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>


                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>End Date</label>
                                                <input type="date"
                                                    class="form-control  @error('end_date') is-invalid @enderror"
                                                    placeholder="Enter ..." name="end_date"
                                                    value="{{ $menu ? $menu->end_date : '' }}">
                                                @error('end_date')
                                                    <span id="date-error"
                                                        class="error invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>


                            </div>

                        </div>
        </section>
    </div>
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
    </div>
@endsection
