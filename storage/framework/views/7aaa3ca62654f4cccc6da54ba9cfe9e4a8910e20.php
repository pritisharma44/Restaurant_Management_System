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

        <div class="row">
            <div class="col-md-6 mx-auto">

                <div class="col-lg-6">
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <tbody>
                                <?php $__currentLoopData = $View; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <img src="<?php echo e(asset('storage/' . $val->image)); ?>" height="200px" width="200px"
                                                alt="img">
                                        </td>
                                        <td>
                                            <h3><?php echo e($val->name); ?></h3>
                                            <h4><?php echo e($val->address); ?></h4>
                                            <p><?php echo e($val->description); ?>

                                            </p>
                                            <p><a href="#"><button>View Details</button></a></p>
                                        </td>
                                    <tr>
                            </tbody>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/food-item/resources/views/restaurants/allrestaurant.blade.php ENDPATH**/ ?>