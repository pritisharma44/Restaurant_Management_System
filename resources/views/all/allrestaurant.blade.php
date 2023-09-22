 @extends('admin.master')
 @section('content')
     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <section class="content-header bg-light">
             <div class="container-fluid">
                 <div class="row mb-2">
                     <div class="col-sm-6">
                         <h1>All Restaurant</h1>
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
             @foreach ($data as $val)
                 <div class="row">
                     <div class="col-lg-3"></div>
                     <div class="card col-lg-6">
                         <div class="card-body">
                             <div class="row">
                                 <div class="col-lg-6"><img src="{{ asset('upload/restaurant_image/' . $val->image) }}"
                                         height="200px" width="200px" alt="img"></div>
                                 <div class="col-lg-6">
                                     <h2>{{ $val->name }}</h2>
                                     <h5>{{ $val->address }}</h5>
                                     <p>{{ $val->description }} </p>
                                     <a href="{{ route('showrestaurant', $val->id) }}"><button>View Details</button></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             @endforeach
         </div>
     </div>
 @endsection
