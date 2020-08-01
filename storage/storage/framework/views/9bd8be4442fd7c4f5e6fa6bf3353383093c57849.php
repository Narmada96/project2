
<?php $__env->startSection('content'); ?>


<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Expenses</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/admin')); ?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Add Expenses</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
     <!-- /.content-header -->
     <div class="content">
      <div class="container-fluid">

      <form class="form-horizontal" action="<?php echo e(route('admin.expenses.store')); ?>" method="POST">
      <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
      
      

                                           <div class="form-group">
                                          <label class="control-label col-sm-2" for="empniclbl">Expense ID:</label>
                                          <div class="col-sm-10">
                                            <input type="text" class="form-control" name="expense_id" required>
                                
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label class="control-label col-sm-2" for="fnamelbl">Project name:</label>
                                          <div class="col-sm-10">
                                          <select class="form-control" name="project_name">
                                           
                                           <option value ="" disabled selected> Choose your option </option> 
                                           <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                           <option value="<?php echo e($p->project_id); ?> <?php echo e($p->project_name); ?> <?php echo e($p->project_type); ?> <?php echo e($p->project_location); ?>"> <?php echo e($p->project_id); ?> - <?php echo e($p->project_name); ?> , <?php echo e($p->project_type); ?> , <?php echo e($p->project_location); ?> </option> 
                                               
                                              
                                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                              </select>
                                         </div>
                                       </div>
                                           

                                            <div class="form-group">
                                              <label class="control-label col-sm-2" for="startdatelbl">Time period start date:</label>
                                              <div class="col-sm-10">
                                                <input type="text" placeholder="Start date" onfocus="(this.type='date')" onblur="(this.type='text')" name="time_period_start_date" required>  
                                          </div>
                                          </div>

                                          <div class="form-group">
                                              <label class="control-label col-sm-2" for="startdatelbl">Time period end date:</label>
                                              <div class="col-sm-10">
                                                <input type="text" placeholder="End date" onfocus="(this.type='date')" onblur="(this.type='text')" name="time_period_end_date" required>  
                                          </div>
                                          </div>

                                          <div class="form-group">
                                            <label class="control-label col-sm-2" for="projectidlbl">Amount given:</label>
                                              <div class="col-sm-10">
                                              <input type="text" class="form-control" name="amount_given" value="">
                                              </div>
                                            </div>
                                            
                                          <div class="form-group">
                                            <label class="control-label col-sm-2" for="projectidlbl">Receiver's name:</label>
                                              <div class="col-sm-10">
                                              <select class="form-control" name="receiver_name">
                                           
                                           <option value ="" disabled selected> Choose your option </option> 
                                           <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                           <option value="<?php echo e($e->first_name); ?> <?php echo e($e->last_name); ?> <?php echo e($e->employee_type); ?> <?php echo e($e->employee_category); ?>"> <?php echo e($e->first_name); ?> <?php echo e($e->last_name); ?> <?php echo e($e->employee_type); ?> <?php echo e($e->employee_category); ?> </option> 
                                               
                                              
                                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                              </select>
                                         </div>
                                       </div>
                                              
                                            <div class="form-group">
                                            <input type="submit" class="btn btn-info" value="Save">
                                            <input class="btn btn-secondary float-right" type="reset" value="Reset">
                                            </div>

               
                                      
</div>
</div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\project2\resources\views/admin\expenses\create.blade.php ENDPATH**/ ?>