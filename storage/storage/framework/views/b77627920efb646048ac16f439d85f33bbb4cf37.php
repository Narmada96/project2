
<?php $__env->startSection('content'); ?>


<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Labor Allocation Details</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/admin')); ?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Labor Allocation Details</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
     <!-- /.content-header -->
     <div class="content">
      <div class="container-fluid">
      
      <?php $__currentLoopData = $labor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <form class="form-horizontal" action="<?php echo e(route('admin/labor/{labor_nic}/allocationUpdate', $l->labor_nic)); ?>" method="POST">
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
      <?php echo method_field('PUT'); ?>
      
                                            
                                          <div class="form-group">
                                          <label class="control-label col-sm-2" for="projecttypetxt"> Supplier ID: </label>
                                          <div class="col-sm-10">
                                          <?php $__currentLoopData = $labor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <select class="form-control" name="supplier_id" required value="<?php echo e($l->supplier_id); ?>">
                                          <option value ="" disabled selected> Choose your option </option> 
                                            <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($s->supplier_id); ?>"
                                            <?php if($s->supplier_id == $l->supplier_id): ?>
                                            selected
                                            <?php endif; ?>
                                            > <?php echo e($s->supplier_id); ?> </option>             
                                               
                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                               </select>
                                            
                                          </div>
                                        </div>
                                           
                                        <div class="form-group">
                                          <label class="control-label col-sm-2" for="projecttypetxt"> Supplier details: </label>
                                          <div class="col-sm-10">
                                          <?php $__currentLoopData = $labor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <select class="form-control" name="supplier_details" required value="<?php echo e($l->supplier_id); ?> <?php echo e($l->supplier_company_name); ?>">
                                          <option value ="" disabled selected> Choose your option </option> 
                                            <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($s->supplier_id); ?> <?php echo e($s->supplier_company_name); ?>"
                                            <?php if($s->supplier_id == $l->supplier_details): ?>
                                            selected
                                            <?php endif; ?>
                                            > <?php echo e($s->supplier_id); ?> <?php echo e($s->supplier_company_name); ?> </option> 
                                                
                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                               </select>
                                            
                                          </div>
                                        </div>

                                           <div class="form-group">
                                          <label class="control-label col-sm-2" for="empniclbl">NIC number of laborer:</label>
                                          <div class="col-sm-10">
                                          <?php $__currentLoopData = $labor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <input type="text" class="form-control" name="labor_nic" value="<?php echo e($l->labor_nic); ?>">
                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                          
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label class="control-label col-sm-2" for="fnamelbl">First name:</label>
                                          <div class="col-sm-10">
                                          <?php $__currentLoopData = $labor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <input type="text" class="form-control" name="first_name" value="<?php echo e($l->first_name); ?>" required>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                           
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label class="control-label col-sm-2" for="lnamelbl">Last name:</label>
                                          <div class="col-sm-10">
                                          <?php $__currentLoopData = $labor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <input type="text" class="form-control" name="last_name" value="<?php echo e($l->last_name); ?>" required>
                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label class="control-label col-sm-2" for="projecttypetxt"> Laborer type: </label>
                                          <div class="col-sm-10">
                                          <?php $__currentLoopData = $labor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <select class="form-control" name="labor_type" required value="<?php echo e($l->labor_type); ?>">
                                          <option value ="" disabled selected> Choose your option </option> 
                                            <?php $__currentLoopData = $project_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($t->project_type_name); ?>"
                                            <?php if($t->project_type_name == $l->labor_type): ?>
                                            selected
                                            <?php endif; ?>
                                            > <?php echo e($t->project_type_name); ?> </option> 
                                                
                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                               </select>
                                            
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label class="control-label col-sm-2" for="projecttypetxt"> Laborer category: </label>
                                          <div class="col-sm-10">
                                          <?php $__currentLoopData = $labor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <select class="form-control" name="labor_category" required value="<?php echo e($l->labor_category); ?>">
                                           
                                            <option value ="" disabled selected> Choose your option </option> 
                                            <?php $__currentLoopData = $employee_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($e->employee_category); ?>"
                                            <?php if($e->employee_category == $l->labor_category): ?>
                                            selected
                                            <?php endif; ?>
                                            > <?php echo e($e->employee_category); ?> </option> 
                                                
                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                               </select>
                                          </div>
                                        </div>

                                        <div class="form-group">
                                        <label class="control-label col-sm-10" for="projectnamelbl">Designation(if laborer type is other):</label>
                                          <div class="col-sm-10">
                                          <?php $__currentLoopData = $labor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <input type="text" class="form-control" name="designation" value="<?php echo e($l->designation); ?>">
                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                         
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label class="control-label col-sm-10" for="customercontactlbl">Contact number(enter as 94..):</label>
                                            <div class="col-sm-10">
                                            <?php $__currentLoopData = $labor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <input type="text" class="form-control" name="labor_contact_number" required value="<?php echo e($l->labor_contact_number); ?>">
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </div>
                                          </div>
                                            

                                          <div class="form-group">
                                          
                                            <label class="control-label col-sm-2" for="statuslbl">Availability:</label>
                                            <?php $__currentLoopData = $labor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <label class="radio-inline">
                                              <input type="radio" name="labor_availability" value="<?php echo e($l->labor_availability); ?>" <?php echo e($l->labor_availability == "Not available" ? 'checked' : ''); ?>>Not available</label>
                                              &nbsp &nbsp &nbsp &nbsp 
                                            <label class="radio-inline">
                                              <input type="radio" name="labor_availability" value="<?php echo e($l->labor_availability); ?>" <?php echo e($l->labor_availability == "Available" ? 'checked' : ''); ?>>Available</label>
                                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                          </div>

                                          <div class="form-group">
                                            <label class="control-label col-sm-2" for="projectidlbl">Project ID:</label>
                                            <div class="col-sm-10">
                                            <?php $__currentLoopData = $labor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <select class="form-control" name="project_id">
                                           
                                           <option value ="" disabled selected> Choose your option </option> 
                                           <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                           <option value="<?php echo e($p->project_id); ?>"> <?php echo e($p->project_id); ?> </option> 
                                               
                                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                              </select>
                                         </div>
                                       </div>

                                            <div class="form-group">
                                            <label class="control-label col-sm-2" for="projectnamelbl">Project details:</label>
                                              <div class="col-sm-10">
                                              <?php $__currentLoopData = $labor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                              <select class="form-control" name="project_details">
                                           
                                            <option value ="" disabled selected> Choose your option </option> 
                                            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($p->project_id); ?> <?php echo e($p->project_name); ?> <?php echo e($p->project_type); ?> <?php echo e($p->project_location); ?>"> <?php echo e($p->project_id); ?> - <?php echo e($p->project_name); ?> , <?php echo e($p->project_type); ?> , <?php echo e($p->project_location); ?> </option> 
                                                
                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\project2\resources\views/admin/labor/allocationview.blade.php ENDPATH**/ ?>