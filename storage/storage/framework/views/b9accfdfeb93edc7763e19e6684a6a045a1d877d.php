
<?php $__env->startSection('content'); ?>


<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Suppliers</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/admin')); ?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Edit Suppliers</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
     <!-- /.content-header -->
     <div class="content">
      <div class="container-fluid">

      <form class="form-horizontal" action="<?php echo e(route('admin.suppliers.update',$supplier->supplier_id)); ?>" method="POST">
      <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
      <?php echo method_field('PUT'); ?>
      

      <div class="form-group">
                                          <label class="control-label col-sm-2" for="projectidlbl">Supplier ID:</label>
                                          <div class="col-sm-10">
                                            <input type="text" class="form-control" name="supplier_id" value="<?php echo e($supplier->supplier_id); ?>">
                                           
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label class="control-label col-sm-2" for="customernamelbl">Supplier company name:</label>
                                          <div class="col-sm-10">
                                          <input type="text" class="form-control" name="supplier_company_name" value="<?php echo e($supplier->supplier_company_name); ?>" required>
                                          </div>
                                        </div>

                                        <div class="form-group">
                                        <label class="control-label col-sm-2" for="projectnamelbl">Name of contact person:</label>
                                          <div class="col-sm-10">
                                          <input type="text" class="form-control" name="name_of_contact_person" value="<?php echo e($supplier->name_of_contact_person); ?>" required>
                                         
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label class="control-label col-sm-2" for="customercontactlbl">Contact number:</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" name="supplier_contact_number" value="<?php echo e($supplier->supplier_contact_number); ?>"  required>


                                            </div>
                                          </div>

                                          <div class="form-group">
                                            <label class="control-label col-sm-2" for="emaillbl">Email:</label>
                                              <div class="col-sm-10">
                                              <input type="email" class="form-control"name="supplier_email" value="<?php echo e($supplier->supplier_email); ?>" required>
                                              </div>
                                            </div>

                                            <div class="form-group">
                                        <label class="control-label col-sm-2" for="projectnamelbl">Address:</label>
                                          <div class="col-sm-10">
                                          <input type="text" class="form-control" name="supplier_address" value="<?php echo e($supplier->supplier_address); ?>" required>
                                         
                                          </div>
                                        </div>

                                        <div class="form-group">
                                              <label class="control-label col-sm-2" for="startdatelbl">Hired Date:</label>
                                              <div class="col-sm-10">
                                                <input type="text" placeholder="Hired date" onfocus="(this.type='date')" onblur="(this.type='text')" name="hired_date" value="<?php echo e($supplier->hired_date); ?>" required>  
                                          </div>
                                          </div>

                                          <div class="form-group">
                                              <label class="control-label col-sm-2" for="startdatelbl">Estimated work end date:</label>
                                              <div class="col-sm-10">
                                                <input type="text" placeholder="Estimated work end date" onfocus="(this.type='date')" onblur="(this.type='text')" name="estimated_work_end_date" value="<?php echo e($supplier->estimated_work_end_date); ?>" required>  
                                          </div>
                                          </div>

                                        <div class="form-group">
                                        <label class="control-label col-sm-2" for="projectnamelbl">Additional remarks:</label>
                                          <div class="col-sm-10">
                                          <input type="text" class="form-control" name="additional_remarks" value="<?php echo e($supplier->additional_remarks); ?>">
                                         
                                          </div>
                                        </div>

                                            <div class="form-group">
                                            <input type="submit" class="btn btn-info" value="Save">
                                            <input class="btn btn-secondary float-right" type="reset" value="Reset">
                                            </div>
                                            
                                      
</div>
</div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\project2\resources\views/admin/suppliers/edit.blade.php ENDPATH**/ ?>