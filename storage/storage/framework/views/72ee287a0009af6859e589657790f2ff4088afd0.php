
<?php $__env->startSection('content'); ?>


<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Machine Allocation Details</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/admin')); ?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Machine Allocation Details</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
     <!-- /.content-header -->
     <div class="content">
      <div class="container-fluid">
       
      <?php $__currentLoopData = $machines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <form class="form-horizontal" action="<?php echo e(route('admin/machines/{machine_id}/allocationUpdate', $m->machine_id)); ?>" method="POST">
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <!--input type="hidden" name="_method" value="PUT"-->
      <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
      <?php echo method_field('PUT'); ?>
      
     
      
      
      <div class="form-group">
                                          <label class="control-label col-sm-2" for="empniclbl"> Machine ID: </label>
                                          <div class="col-sm-10">
                                          <?php $__currentLoopData = $machines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <input type="text" class="form-control" name="machine_id" value="<?php echo e($m->machine_id); ?>">
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label class="control-label col-sm-2" for="projecttypetxt"> Machine type: </label>
                                          <div class="col-sm-10">
                                          <?php $__currentLoopData = $machines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <select class="form-control" name="machine_type" required>
                                           
                                           
                                            <option value ="" disabled selected> Choose your option </option> 
                                            <?php $__currentLoopData = $machine_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($t->machine_type_name); ?>" 

                                            <?php if($t->machine_type_name == $m->machine_type): ?>
                                            selected
                                            <?php endif; ?>
                                            > <?php echo e($t->machine_type_name); ?> </option> 
                                                
                                               
                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                               </select>
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label class="control-label col-sm-2" for="fnamelbl"> Machine name(if machine type is other):</label>
                                          <div class="col-sm-10">
                                          <?php $__currentLoopData = $machines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <input type="text" class="form-control" name="machine_name" value="<?php echo e($m->machine_name); ?>">
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                           
                                          </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="statuslbl">Machine availability:</label>
                                            <?php $__currentLoopData = $machines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <label class="radio-inline">
                                              <input type="radio" name="machine_availability" value="<?php echo e($m->machine_availability); ?>" <?php echo e($m->machine_availability == "Available" ? 'checked' : ''); ?>>Available</label>
                                              &nbsp &nbsp &nbsp &nbsp 
                                            <label class="radio-inline">
                                              <input type="radio" name="machine_availability" value="<?php echo e($m->machine_availability); ?>" <?php echo e($m->machine_availability == "Not available" ? 'checked' : ''); ?>>Not available</label>
                                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                          </div>

                                          <div class="form-group">
                                            <label class="control-label col-sm-2" for="projectidlbl">Project ID:</label>
                                              <div class="col-sm-10">
                                              <select class="form-control" name="project_id">
                                           
                                           <option value ="" disabled selected> Choose your option </option> 
                                           <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                           <option value="<?php echo e($p->project_id); ?>"> <?php echo e($p->project_id); ?> </option> 
                                               
                                              
                                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                              </select>
                                         </div>
                                       </div>

                                            <div class="form-group">
                                            <label class="control-label col-sm-2" for="projectnamelbl">Project name:</label>
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
                                          <label class="control-label col-sm-2" for="projecttypetxt"> Work start date: </label>
                                          <div class="col-sm-10">
                                          <?php $__currentLoopData = $machines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <input type="text" placeholder="Work start date" onfocus="(this.type='date')" onblur="(this.type='text')" name="work_start_date">
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                        </div>
                                                <div class="form-group">
                                                <label class="control-label col-sm-2" for="projecttypetxt"> Work end date: </label>
                                          <div class="col-sm-10">
                                          <?php $__currentLoopData = $machines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <input type="text" placeholder="Work end date" onfocus="(this.type='date')" onblur="(this.type='text')" name="work_end_date">
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            
                                         
                                        </div>
                                        </div>

                                        
                                            <div class="form-group">
                                            <input type="submit" class="btn btn-info" value="Save">
                                            <input class="btn btn-secondary float-right" type="reset" value="Reset">
                                            </div>
                                           
                                            
                                      
</div>
</div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\project2\resources\views/admin/machines/allocationview.blade.php ENDPATH**/ ?>