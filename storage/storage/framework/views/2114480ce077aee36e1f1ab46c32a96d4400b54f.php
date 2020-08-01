
<?php $__env->startSection('content'); ?>


<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Projects</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/admin')); ?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Edit Projects</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
     <!-- /.content-header -->
     <div class="content">
      <div class="container-fluid">

      <form class="form-horizontal" action="<?php echo e(route('admin.projects.update',$project->project_id)); ?>" method="POST">
      <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
      <?php echo method_field('PUT'); ?>
      

                                           <div class="form-group">
                                          <label class="control-label col-sm-2" for="projectidlbl">Project ID:</label>
                                          <div class="col-sm-10">
                                            <input type="text" class="form-control" name="project_id" value="<?php echo e($project->project_id); ?>">
                                           
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label class="control-label col-sm-2" for="projecttypetxt"> Project Type: </label>
                                          <div class="col-sm-10">
                                            <select class="form-control" name="project_type" required>
                                           
                                            <option value ="" disabled selected> Choose your option </option> 
                                            <?php $__currentLoopData = $project_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($t->project_type_name); ?>" 

                                            <?php if($t->project_type_name == $project->project_type): ?>
                                            selected
                                            <?php endif; ?>
                                            > <?php echo e($t->project_type_name); ?> </option> 
                                                
                                               
                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                               </select>
                                          </div>
                                        </div>

                                        <div class="form-group">
                                        <label class="control-label col-sm-2" for="projectnamelbl">Project name:</label>
                                          <div class="col-sm-10">
                                          <input type="text" class="form-control" name="project_name" value="<?php echo e($project->project_name); ?>" required>
                                         
                                          </div>
                                        </div>

                                        <div class="form-group">
                                        <label class="control-label col-sm-2" for="projectnamelbl">Project location:</label>
                                          <div class="col-sm-10">
                                          <input type="text" class="form-control" name="project_location" value="<?php echo e($project->project_location); ?>"  required>
                                         
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label class="control-label col-sm-2" for="customernamelbl"> Customer name: </label>
                                          <div class="col-sm-10">
                                          <select class="form-control" name="customer_name" required>
                                          <option value ="" disabled selected> Choose your option </option> 
                                            <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($c->company_name); ?>"

                                            <?php if($c->company_name == $project->customer_name): ?>
                                            selected
                                            <?php endif; ?>
                                            > <?php echo e($c->company_name); ?> </option> 
                                                
                                               
                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                               </select>
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label class="control-label col-sm-2" for="customercontactlbl">Contact number:</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" name="contact_number" value="<?php echo e($project->contact_number); ?>" required>
                                            </div>
                                          </div>

                                          <div class="form-group">
                                            <label class="control-label col-sm-2" for="emaillbl">Email:</label>
                                              <div class="col-sm-10">
                                              <input type="email" class="form-control"name="email" value="<?php echo e($project->email); ?>">
                                              </div>
                                            </div>

                                            <div class="form-group">
                                              <label class="control-label col-sm-2" for="startdatelbl">Start Date:</label>
                                              <div class="col-sm-10">
                                                <input type="text" placeholder="Start date" onfocus="(this.type='date')" onblur="(this.type='text')" value="<?php echo e($project->project_start_date); ?>" name="project_start_date" required>  
                                          </div>
                                          </div>

                                          <div class="form-group">
                                              <label class="control-label col-sm-2" for="startdatelbl">Estimated end date:</label>
                                              <div class="col-sm-10">
                                                <input type="text" placeholder="Estimated end date" onfocus="(this.type='date')" onblur="(this.type='text')" value="<?php echo e($project->estimated_project_end_date); ?>" name="estimated_project_end_date" required>  
                                          </div>
                                          </div>

                                            <div class="form-group">
                                            <input type="submit" class="btn btn-info" value="Save">
                                            
                                      
</div>
</div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\project2\resources\views/admin/projects/edit.blade.php ENDPATH**/ ?>