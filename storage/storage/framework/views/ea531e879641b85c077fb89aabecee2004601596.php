
<?php $__env->startSection('content'); ?>


<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Projects</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/admin')); ?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Add Projects</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
     <!-- /.content-header -->
     <div class="content">
      <div class="container-fluid">

      <form class="form-horizontal" action="<?php echo e(route('admin.projects.store')); ?>" method="POST">
      <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
      

                                           <div class="form-group">
                                          <label class="control-label col-sm-2" for="projectidlbl">Project ID:</label>
                                          <div class="col-sm-10">
                                            <input type="text" class="form-control" name="project_id" required>
                                           
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label class="control-label col-sm-2" for="projecttypetxt"> Project Type: </label>
                                          <div class="col-sm-10">
                                            <select class="form-control" name="project_type" required>
                                           
                                            <option value ="" disabled selected> Choose your option </option> 
                                            <option value="Marine"> Marine </option>
                                      <option value="Mechanical"> Mechanical </option>
                                      <option value="Civil"> Civil </option>
                                      <option value="Electrical"> Electrical </option>         
                                               </select>
                                            
                                          </div>
                                        </div>

                                        <div class="form-group">
                                        <label class="control-label col-sm-2" for="projectnamelbl">Project name:</label>
                                          <div class="col-sm-10">
                                          <input type="text" class="form-control" name="project_name" required>
                                         
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label class="control-label col-sm-2" for="customernamelbl"> Customer name: </label>
                                          <div class="col-sm-10">
                                          <input type="text" class="form-control" name="customer_name" required>
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label class="control-label col-sm-2" for="customercontactlbl">Contact number:</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" name="contact_number" required>
                                            </div>
                                          </div>

                                          <div class="form-group">
                                            <label class="control-label col-sm-2" for="emaillbl">Email:</label>
                                              <div class="col-sm-10">
                                              <input type="email" class="form-control"name="email">
                                              </div>
                                            </div>

                                            <div class="form-group">
                                              <label class="control-label col-sm-2" for="startdatelbl">Start Date:</label>
                                              <div class="col-sm-10">
                                                <input type="text" placeholder="Start date" onfocus="(this.type='date')" onblur="(this.type='text')" name="project_start_date" required>  
                                          </div>
                                          </div>

                                          <div class="form-group">
                                            <label class="control-label col-sm-2" for="statuslbl">Status:</label>

                                            <label class="radio-inline">
                                              <input type="radio" name="status" value="In progress">In progress </label>
                                              &nbsp &nbsp &nbsp &nbsp 
                                            <label class="radio-inline">
                                              <input type="radio" name="status" value="Completed">Completed </label>
                                          </div>

                            
                                          <div class="form-group">
                                            <label class="control-label col-sm-2" for="seniorenglbl">Senior Engineer:</label>
                                              <div class="col-sm-10">
                                              <input type="text" class="form-control" name="senior_engineer_name">
                                              </div>
                                            </div>

                                            <div class="form-group">
                                            <label class="control-label col-sm-2" for="projectsupervisorlbl">Project Supervisor:</label>
                                              <div class="col-sm-10">
                                              <input type="text" class="form-control" name="project_supervisor_name">
                                              </div>
                                            </div>

                                            <div class="form-group">
                                            <input type="submit" class="btn btn-info" value="Save">
                                            
                                      
</div>
</div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\project2\resources\views/admin/projects/create.blade.php ENDPATH**/ ?>