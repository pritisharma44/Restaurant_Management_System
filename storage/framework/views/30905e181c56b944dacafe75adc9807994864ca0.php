<?php $__env->startSection('content'); ?>
    <h1>Hello</h1>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      
        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <!-- left column -->
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Practice </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action=""
                                    method="post">
                                    <?php echo csrf_field(); ?>
                                  
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Type</label>
                                                <select class="form-control" id="selectBox"
                                                    rows="3" name="type">
                                                    <option value="">--Select--</option>
                                                    <option value="animal">Animal</option>
                                                    <option value="fruit">Fruit</option>
                                                    <option value="food">Food</option>
                                                </select>
                                              
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Set Value</label>
                                                <input type="text"
                                                    class="form-control"
                                                    placeholder="Enter ..." name="set_value"
                                                    value="" id="set_value" readonly>
                                               
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


    <script>
        $(document).ready(function() {
          
        $('#selectBox').click(function(){ 
            var selectedValue =   $('#selectBox').val();

            if(selectedValue == 'animal')
            {
                selectedValue = 'Cow';
            }
            else if(selectedValue == 'fruit')
            {
                selectedValue = 'Apple';
            }
            else if(selectedValue == 'food')
            {
                selectedValue = 'Pizza';
            }
            // console.log(selectedValue)
            document.getElementById("set_value").value = selectedValue;
        });
        
        });
        
    </script>
        
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/food-item/resources/views/demo/test.blade.php ENDPATH**/ ?>