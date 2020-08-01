
<?php $__env->startSection('content'); ?>


<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Warranties</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/admin')); ?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Edit Warranties</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
     <!-- /.content-header -->
     <div class="content">
      <div class="container-fluid">

      <form class="form-horizontal" action="<?php echo e(route('admin.warranties.update',$warranty->warranty_id)); ?>"  method="POST">
      <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
      <?php echo method_field('PUT'); ?>

      <div class="form-group">
                                          <label class="control-label col-sm-2" for="projectidlbl">Warranty ID:</label>
                                          <div class="col-sm-10">
                                            <input type="text" class="form-control" name="warranty_id" value="<?php echo e($warranty->warranty_id); ?>">
                                           
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label class="control-label col-sm-2" for="projecttypetxt"> Project ID: </label>
                                          <div class="col-sm-10">
                                            <select class="form-control" name="project_id" required value="<?php echo e($warranty->project_id); ?>">
                                            <option value ="" disabled selected> Choose your option </option> 

                                            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($p->project_id); ?>"

                                            <?php if($p->project_id == $warranty->project_id): ?>
                                            selected
                                            <?php endif; ?>
                                            > <?php echo e($p->project_id); ?> </option> 
                                                
                                               
                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                               </select>
                                            
                                          </div>
                                        </div>
                                        
                                        <div class="form-group">
                                          <label class="control-label col-sm-2" for="projecttypetxt"> Project name: </label>
                                          <div class="col-sm-10">
                                            <select class="form-control" name="project_name" required value="<?php echo e($warranty->project_name); ?>">
                                            <option value ="" disabled selected> Choose your option </option> 

                                            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($p->project_id); ?> <?php echo e($p->project_name); ?>"

                                            <?php if($p->project_id == $warranty->project_name): ?>
                                            selected
                                            <?php endif; ?>
                                                > <?php echo e($p->project_id); ?> <?php echo e($p->project_name); ?> </option> 
                                                
                                               
                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                               </select>
                                            
                                          </div>
                                        </div>

                                          <div class="form-group">
                                          <label class="control-label col-sm-2" for="customernamelbl"> Customer name: </label>
                                          <div class="col-sm-10">
                                          <input type="text" class="form-control" name="customer_name" value="<?php echo e($warranty->customer_name); ?>" required>
                                          </div>
                                        </div>
                                           
                                           <p> Choose either the time period or enter number of machine hours </p>

                                           <div class="form-group">
                                           <label class="control-label col-sm-2" for="emaillbl">Warranty time period:</label>
                                              <div class="col-sm-10">
                                              <input type="text" placeholder="Start date" onfocus="(this.type='date')" onblur="(this.type='text')" name="warranty_start_date" value="<?php echo e($warranty->warranty_start_date); ?>">
                                              <input type="text" placeholder="End date" onfocus="(this.type='date')" onblur="(this.type='text')" name="warranty_end_date" value="<?php echo e($warranty->warranty_end_date); ?>">   
                                              </div>
                                            </div>

                                            <div class="form-group">
                                           <label class="control-label col-sm-2" for="emaillbl">Machine hours:</label>
                                              <div class="col-sm-10">
                                              <input type="text" class="form-control" name="machine_hours" value="<?php echo e($warranty->machine_hours); ?>">
                                              </div>
                                            </div>
                                           
                                            <div class="form-group">
                                            <input type="submit" class="btn btn-info" value="Save">
                                            <input class="btn btn-secondary float-right" type="reset" value="Reset">
                                            </div>
                                            
                                      
</div>
</div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\project2\resources\views/admin/warranties/edit.blade.php ENDPATH**/ ?>