
<?php $__env->startSection('content'); ?>


<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Employee Details</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/admin')); ?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Edit Employee Details</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
     <!-- /.content-header -->
     <div class="content">
      <div class="container-fluid">

      <form class="form-horizontal" action="<?php echo e(route('admin.employees.update', $employee->employee_nic)); ?>" method="POST">
      <!--input type="hidden" name="_method" value="PUT"-->
      <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
      <?php echo method_field('PUT'); ?>
      
     
      
      <div class="form-group">
                                          <label class="control-label col-sm-2" for="empniclbl">NIC number of employee:</label>
                                          <div class="col-sm-10">
                                            <input type="text" class="form-control" name="employee_nic" value="<?php echo e($employee->employee_nic); ?>" required>
                                           
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label class="control-label col-sm-2" for="fnamelbl">First name:</label>
                                          <div class="col-sm-10">
                                            <input type="text" class="form-control" name="first_name" required value="<?php echo e($employee->first_name); ?>">
                                           
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label class="control-label col-sm-2" for="lnamelbl">Last name:</label>
                                          <div class="col-sm-10">
                                            <input type="text" class="form-control" name="last_name" required value="<?php echo e($employee->last_name); ?>">
                                           
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label class="control-label col-sm-2" for="projecttypetxt"> Employee type: </label>
                                          <div class="col-sm-10">
                                            <select class="form-control" name="employee_type" required value="<?php echo e($employee->employee_type); ?>">
                                           
                                            <option value ="" disabled selected> Choose your option </option> 
                                            <?php $__currentLoopData = $project_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($t->project_type_name); ?>" 

                                            <?php if($t->project_type_name == $employee->employee_type): ?>
                                            selected
                                            <?php endif; ?>
                                            > <?php echo e($t->project_type_name); ?> </option> 
                                                
                                               
                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                               </select>
                                          </div>
                                        </div>
                                            
                                        <div class="form-group">
                                          <label class="control-label col-sm-2" for="projecttypetxt"> Employee category: </label>
                                          <div class="col-sm-10">
                                            <select class="form-control" name="employee_category" required value="<?php echo e($employee->employee_category); ?>">
                                           
                                            <option value ="" disabled selected> Choose your option </option> 
                                            <?php $__currentLoopData = $employee_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($e->employee_category); ?>" 

                                            <?php if($e->employee_category == $employee->employee_category): ?>
                                            selected
                                            <?php endif; ?>
                                            > <?php echo e($e->employee_category); ?> </option> 
                                                
                                               
                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                               </select>
                                          </div>
                                        </div>

                                        <div class="form-group">
                                        <label class="control-label col-sm-2" for="projectnamelbl">Designation(if employee type is other)</label>
                                          <div class="col-sm-10">
                                          <input type="text" class="form-control" name="designation" value="<?php echo e($employee->designation); ?>">
                                         
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label class="control-label col-sm-2" for="customercontactlbl">Contact number:</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" name="employee_contact_number" required value="<?php echo e($employee->employee_contact_number); ?>">
                                            </div>
                                          </div>

                                          <div class="form-group">
                                            <label class="control-label col-sm-2" for="emaillbl">Email:</label>
                                              <div class="col-sm-10">
                                              <input type="email" class="form-control" name="email" value="<?php echo e($employee->email); ?>">
                                              </div>
                                            </div>

                                          <div class="form-group">
                                            <label class="control-label col-sm-2" for="statuslbl">Availability:</label>

                                            <label class="radio-inline">
                                              <input type="radio" name="employee_availability" value="<?php echo e($employee->employee_availability); ?>" <?php echo e($employee->employee_availability == "Not available" ? 'checked' : ''); ?>>Not available</label>
                                              &nbsp &nbsp &nbsp &nbsp 
                                            <label class="radio-inline">
                                              <input type="radio" name="employee_availability" value="<?php echo e($employee->employee_availability); ?>" <?php echo e($employee->employee_availability == "Available" ? 'checked' : ''); ?>>Available</label>
                                          </div>

                                            <div class="form-group">
                                            <input type="submit" class="btn btn-info" value="Save">

                                            <!--div class="buttons">
                                            <input type="submit" class="btn btn-info" value="Edit">
                                            <a href="<?php echo e(route('admin.employees.show',$employee->employee_nic)); ?>" type="submit" class="btn btn-info"> Cancel </a>
                                            <input class="btn btn-secondary float-right" type="reset" value="Reset">
                                            </div-->
                                            
                                      
</div>
</div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\project2\resources\views/admin/employees/edit.blade.php ENDPATH**/ ?>