
<?php $__env->startSection('content'); ?>


<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Machines</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/admin')); ?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Edit Machines</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
     <!-- /.content-header -->
     <div class="content">
      <div class="container-fluid">

      <form class="form-horizontal" action="<?php echo e(route('admin.machines.update',$machine->machine_id)); ?>" method="POST">
      <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
      <?php echo method_field('PUT'); ?>
      
      

                                           <div class="form-group">
                                          <label class="control-label col-sm-2" for="empniclbl"> Machine ID: </label>
                                          <div class="col-sm-10">
                                            <input type="text" class="form-control" name="machine_id" value="<?php echo e($machine->machine_id); ?>">
                                           
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label class="control-label col-sm-2" for="projecttypetxt"> Machine type: </label>
                                          <div class="col-sm-10">
                                            <select class="form-control" name="machine_type" value="<?php echo e($machine->machine_type); ?>">
                                            <?php $__currentLoopData = $machine_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($t->machine_type_name); ?>" 

                                            <?php if($t->machine_type_name == $machine->machine_type): ?>
                                            selected
                                            <?php endif; ?>
                                            > <?php echo e($t->machine_type_name); ?> </option> 
                                                
                                               
                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                               </select>

                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label class="control-label col-sm-2" for="fnamelbl"> Machine name(if machine type is other):</label>
                                          <div class="col-sm-10">
                                            <input type="text" class="form-control" name="machine_name" value="<?php echo e($machine->machine_name); ?>">
                                           
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label class="control-label col-sm-2" for="lnamelbl">Model number:</label>
                                          <div class="col-sm-10">
                                            <input type="text" class="form-control" name="model_number" value="<?php echo e($machine->model_number); ?>" required>
                                           
                                          </div>
                                        </div>

                                       

                                        <div class="form-group">
                                          <label class="control-label col-sm-2" for="projecttypetxt"> Machine purchase date: </label>
                                          <div class="col-sm-10">
                                                <input type="text" placeholder="Start date" onfocus="(this.type='date')" onblur="(this.type='text')" name="machine_purchase_date" value="<?php echo e($machine->machine_purchase_date); ?>" required>
                                            
                                          </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="statuslbl">Machine availability:</label>

                                            <label class="radio-inline">
                                              <input type="radio" name="machine_availability" value="<?php echo e($machine->machine_availability); ?>" <?php echo e($machine->machine_availability == "Available" ? 'checked' : ''); ?>>Available</label>
                                              &nbsp &nbsp &nbsp &nbsp 
                                            <label class="radio-inline">
                                              <input type="radio" name="machine_availability" value="<?php echo e($machine->machine_availability); ?>" <?php echo e($machine->machine_availability == "Not available" ? 'checked' : ''); ?>> Not available</label>
                                          </div>


                                        <div class="form-group">
                                        <label class="control-label col-sm-2" for="projectnamelbl">Additional details</label>
                                          <div class="col-sm-10">
                                          <input type="text" class="form-control" name="additional_details" value="<?php echo e($machine->additional_details); ?>">
                                          </div>
                                        </div>
                                          
                                            <div class="form-group">
                                            <input type="submit" class="btn btn-info" value="Save">
                                            <input class="btn btn-secondary float-right" type="reset" value="Reset">
                                            </div>

               
                                      
</div>
</div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\project2\resources\views/admin/machines/edit.blade.php ENDPATH**/ ?>