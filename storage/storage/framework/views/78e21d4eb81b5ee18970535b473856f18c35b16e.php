
<?php $__env->startSection('content'); ?>


<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Employee Allocation</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/admin')); ?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Employee Allocation</li>
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
           <table class="table table-bordered table-striped" id="employee_allocation_table">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">NIC number of employee</th>
                                                      <th scope="col">First name</th>
                                                      <th scope="col">Last name</th>
                                                      <th scope="col">Employee type</th>
                                                      <th scope="col">Employee category</th>
                                                      <th scope="col">Designation</th>
                                                      <th scope="col">Employee contact number</th>
                                                      <th scope="col">Email</th>
                                                      <th scope="col">Availability</th>
                                                      <th scope="col">Project ID</th>
                                                      <th scope="col">Project details</th>
                                                      <th> Actions </th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                
                                                  
                                                    <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($e->employee_nic); ?></td>
                                                        <td><?php echo e($e->first_name); ?></td>
                                                        <td><?php echo e($e->last_name); ?></td>
                                                        <td><?php echo e($e->employee_type); ?></td>
                                                        <td><?php echo e($e->employee_category); ?></td>
                                                        <td><?php echo e($e->designation); ?></td>
                                                        <td><?php echo e($e->employee_contact_number); ?></td>
                                                        <td><?php echo e($e->email); ?></td>
                                                        <td><?php echo e($e->employee_availability); ?></td>
                                                        <td><?php echo e($e->project_id); ?></td>
                                                        <td>{{$e->project_location}</td>
                                                        
                                                        
                                                      
                                                        
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    
</table>
</div>
</div>
</div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\project2\resources\views/admin/employees/allocationindex.blade.php ENDPATH**/ ?>