<?php $__env->startSection('content'); ?>
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
                            <li class="breadcrumb-item"><a href="<?php echo e(route('restaurants.create')); ?>">
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
                                        <?php $__currentLoopData = $showData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $restaurant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($restaurant->id); ?></td>
                                                <td><?php echo e($restaurant->name); ?></td>
                                                <td><?php echo e($restaurant->phone); ?></td>
                                                <td><?php echo e($restaurant->description); ?></td>
                                                <td> <img src="<?php echo e(asset('upload/restaurant_image/'.$restaurant->image)); ?>" height="44" width="44"/></td>
                                                <td><?php echo e($restaurant->address); ?></td>
                                                <td>
                                                    <a href="<?php echo e(route('restaurants.edit',$restaurant->id)); ?>">EDIT</a>
                                                </td>

                                                </td>
                                                <td>
                                                    <a href="<?php echo e(route('restaurants.show',$restaurant->id)); ?>">VIEW</a>
                                                </td>
                                                <td>
                                                    <form action="<?php echo e(route('restaurants.destroy',$restaurant->id)); ?>" method="post">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <input type="submit" name="submit" value="Delete" />
                                                    </form>
                                                </td>
                                            </tr>

                                    </tbody>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/food-item/resources/views/restaurants/restaurantDetails.blade.php ENDPATH**/ ?>