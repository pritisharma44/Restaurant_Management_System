@extends('admin.master')
@section('content')
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
                            <li class="breadcrumb-item"><a href="{{ route('items.create') }}">
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
                                <h3 class="card-title">Menu Items</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>name</th>
                                            <th>Menu</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                            <th>Discount</th>
                                            <th>Update</th>
                                            <th>View</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($showData as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->name }}</td>
                                                 <td>{{ $item->menu->type }}</td>
                                                <td>{{ $item->price }}</td>
                                                <td> <img src="{{ asset('upload/menuItem_image/'.$item->image) }}" height="44" width="44"/></td>
                                               
                                                <td> {{ $item->discount }}</td>
                                               
                                                <td>
                                                    <a href="{{route('items.edit',$item->id)}}">EDIT</a>
                                                </td>


                                                <td>
                                                    <a href="">VIEW</a>
                                                </td>
                                                <td>
                                                    <form action="{{route('items.destroy',$item->id)}}" method="post">
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
