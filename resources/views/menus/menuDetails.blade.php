@extends('admin.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Menu all Records</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('menus.create')}}">
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Menus</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Type</th> 
                                            <th>Restaurant</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Update</th>
                                            <th>View</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($showData as $menu)
                                            <tr>
                                                <td>{{$menu->id}}</td>
                                                <td>{{$menu->type}}</td>
                                                <td>{{$menu->restaurant->name}}</td>
                                                <td> {{$menu->start_date}}</td>
                                                <td>{{$menu->end_date}}</td>
                                                <td>
                                                    <a href="{{route('menus.edit',$menu->id)}}">EDIT</a>
                                                </td>

                                                </td>
                                                <td>
                                                    <a href="">VIEW</a>
                                                </td>
                                                <td>
                                                    <form action="{{route('menus.destroy',$menu->id)}}" method="post">
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
