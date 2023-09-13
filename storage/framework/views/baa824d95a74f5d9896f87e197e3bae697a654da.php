 
 <?php $__env->startSection('content'); ?>
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
             <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <div class="row">
                     <div class="col-lg-3"></div>
                     <div class="card col-lg-6">
                         <div class="card-body">
                             <div class="row">
                                 <div class="col-lg-6"><img src="<?php echo e(asset('upload/restaurant_image/' . $val->image)); ?>"
                                         height="200px" width="200px" alt="img"></div>
                                 <div class="col-lg-6">
                                     <h2><?php echo e($val->name); ?></h2>
                                     <h5><?php echo e($val->address); ?></h5>
                                     <p><?php echo e($val->description); ?> </p>
                                     <a href="<?php echo e(route('showrestaurant', $val->id)); ?>"><button>View Details</button></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </div>
     </div>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/food-item/resources/views/all/allrestaurant.blade.php ENDPATH**/ ?>