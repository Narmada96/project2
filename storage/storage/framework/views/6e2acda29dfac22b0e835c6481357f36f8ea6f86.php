
<?php $__env->startSection('content'); ?>


<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Labor</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/admin')); ?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Labor</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
      <div class="container-fluid">
          <p>
              <a href="<?php echo e(route('admin.labor.create')); ?>" class="btn btn-primary"> Add new laborer </a>             
</p>
<p>
              <a href="<?php echo e(url('/admin/labor/allocationindex')); ?>" class="btn btn-success"> View allocation </a>
              </p>
<div style="overflow-x:auto;">
           <table class="table table-bordered table-striped" id="labor_table">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">Supplier ID</th>
                                                      <th scope="col">Supplier details</th>
                                                      <th scope="col">NIC of laborer</th>
                                                      <th scope="col">First name</th>
                                                      <th scope="col">Last name</th>
                                                      <th scope="col">Labor type</th>
                                                      <th scope="col">Labor category</th>
                                                      <th scope="col">Designation</th>
                                                      <th scope="col">Contact number</th>
                                                      <th scope="col">Availability</th>
                                                      <th scope="col">Hired date</th>
                                                      <th scope="col">Estimated work end date</th>
                                                      <th> Actions </th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                
                                                    <?php $__currentLoopData = $labor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($l->supplier_id); ?></td>
                                                        <td><?php echo e($l->supplier_details); ?></td>
                                                        <td><?php echo e($l->labor_nic); ?></td>
                                                        <td><?php echo e($l->first_name); ?></td>
                                                        <td><?php echo e($l->last_name); ?></td>
                                                        <td><?php echo e($l->labor_type); ?></td>
                                                        <td><?php echo e($l->labor_category); ?></td>
                                                        <td><?php echo e($l->designation); ?></td>
                                                        <td><?php echo e($l->labor_contact_number); ?></td>
                                                        <td><?php echo e($l->labor_availability); ?></td>
                                                        <td><?php echo e($l->labor_hired_date); ?></td>
                                                        <td><?php echo e($l->labor_end_date); ?></td>
                                                        <td> <div class="btn-group" role="group">
                                                        <a href="<?php echo e(route('admin.labor.edit', $l->labor_nic)); ?>" class="btn btn-info"> Edit  </a> 
                                                        <a href="<?php echo e(route('admin/labor/{labor_nic}/allocationEdit',$l->labor_nic)); ?>" class="btn btn-warning" > Allocate </a>
                                                        </div>
                                                        </td>
                                                      
                                                        
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</div>
</div>
</div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\project2\resources\views/admin/labor/index.blade.php ENDPATH**/ ?>