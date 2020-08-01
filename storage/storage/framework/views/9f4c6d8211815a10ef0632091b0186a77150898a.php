
<?php $__env->startSection('content'); ?>


<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Machine Allocation</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/admin')); ?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Machine Allocation</li>
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
           <table class="table table-bordered table-striped" id="machine_allocation_table">
                                                  <thead>
                                                    <tr>
                                                    <th scope="col">Machine ID</th>
                                                      <th scope="col">Machine Type</th>
                                                      <th scope="col">Machine name</th>
                                                      <th scope="col">Machine availability</th>
                                                      <th scope="col">Project ID</th>
                                                      <th scope="col">Project name</th>
                                                      <th scope="col">Work start date</th>
                                                      <th scope="col">Work end date</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                
                                                    <?php $__currentLoopData = $machine; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($data->machine_id); ?></td>
                                                        <td><?php echo e($data->machine_type); ?></td>
                                                        <td><?php echo e($data->machine_name); ?></td>
                                                        <td><?php echo e($data->machine_availability); ?></td>
                                                        <td><?php echo e($data->project_id); ?></td>
                                                        <td><?php echo e($data->project_name); ?></td>
                                                        <td><?php echo e($data->work_start_date); ?></td>
                                                        <td><?php echo e($data->work_end_date); ?></td>
                                                        
                                                        </tr>
                                                        
                                                      
                                                        
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</div>
</div>
</div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\project2\resources\views//admin/machines/allocationindex.blade.php ENDPATH**/ ?>