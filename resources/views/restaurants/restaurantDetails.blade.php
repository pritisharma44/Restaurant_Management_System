@extends('admin.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Restaurant Details</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('restaurants.create')}}">
                                    <button type="submit" class="btn btn-primary">Add</button>
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
                    <div class="col-14">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">DataTable with minimal features & hover style</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th> 
                                            <th>Phone</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Address</th>
                                            <th>Update</th>
                                            <th>View</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($showData as $restaurant)
                                            <tr>
                                                <td>{{$restaurant->id}}</td>
                                                <td>{{$restaurant->name}}</td>
                                                <td>{{$restaurant->phone}}</td>
                                                <td>{{$restaurant->description}}</td>
                                                <td> <img src="{{ asset('upload/restaurant_image/'.$restaurant->image) }}" height="44" width="44"/></td>
                                                <td>{{$restaurant->address}}</td>
                                                <td>
                                                    <a href="{{route('restaurants.edit',$restaurant->id)}}">EDIT</a>
                                                </td>

                                                </td>
                                                <td>
                                                    <a href="{{route('restaurants.show',$restaurant->id)}}">VIEW</a>
                                                </td>
                                                <td>
                                                    <form action="{{route('restaurants.destroy',$restaurant->id)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="submit" name="submit" value="Delete" />
                                                    </form>
                                                </td>
                                            </tr>

                                    </tbody>
                                   @endforeach
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->



                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
