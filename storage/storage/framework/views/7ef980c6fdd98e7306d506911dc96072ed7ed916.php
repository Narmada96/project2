
<?php $__env->startSection('content'); ?>


<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Labor Allocation</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/admin')); ?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Labor Allocation</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
      <div class="container-fluid">
          <p>
              <a href="" class="btn btn-primary"> Create report </a>
</p>
<div style="overflow-x:auto;">
           <table class="table table-bordered table-striped" id="labor_allocation_table">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">Supplier ID</th>
                                                      <th scope="col">Supplier details</th>
                                                      <th scope="col">Labor NIC</th>
                                                      <th scope="col">First name</th>
                                                      <th scope="col">Last name</th>
                                                      <th scope="col">Labor type</th>
                                                      <th scope="col">Labor category</th>
                                                      <th scope="col">Designation</th>
                                                      <th scope="col">Contact number</th>
                                                      <th scope="col">Availability</th>
                                                      <th scope="col">Project ID</th>
                                                      <th scope="col">Project details</th>
                                                      <th> Actions </th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                
                                                  
                                                    <?php $__currentLoopData = $labor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($data->supplier_id); ?></td>
                                                        <td><?php echo e($data->supplier_details); ?></td>
                                                        <td><?php echo e($data->labor_nic); ?></td>
                                                        <td><?php echo e($data->first_name); ?></td>
                                                        <td><?php echo e($data->last_name); ?></td>
                                                        <td><?php echo e($data->labor_type); ?></td>
                                                        <td><?php echo e($data->labor_category); ?></td>
                                                        <td><?php echo e($data->designation); ?></td>
                                                        <td><?php echo e($data->labor_contact_number); ?></td>
                                                        <td><?php echo e($data->labor_availability); ?></td>
                                                        <td><?php echo e($data->project_id); ?></td>
                                                        <td><?php echo e($data->project_details); ?></td>
                                                       </tr> 
                                                      
                                                        
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    
</table>
</div>
</div>
</div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\project2\resources\views//admin/labor/allocationindex.blade.php ENDPATH**/ ?>