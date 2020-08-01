
<?php $__env->startSection('content'); ?>


<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Machines</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/admin')); ?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Machines</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
      <div class="container-fluid">
          <p>
              <a href="<?php echo e(route('admin.machines.create')); ?>" class="btn btn-primary"> Add new machine </a>
              
</p>
<p>
              <a href="<?php echo e(url('/admin/machines/allocationindex')); ?>" class="btn btn-success"> View allocation </a>
              </p>
           <table class="table table-bordered table-striped" id="machines_table">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">Machine ID</th>
                                                      <th scope="col">Machine Type</th>
                                                      <th scope="col">Machine name</th>
                                                      <th scope="col">Model number</th>
                                                      <th scope="col">Machine purchase date</th>
                                                      <th scope="col">Machine availability</th>
                                                      <th scope="col">Additional details</th>
                                                      <th> Actions </th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                
                                                    <?php $__currentLoopData = $machines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($m->machine_id); ?></td>
                                                        <td><?php echo e($m->machine_type); ?></td>
                                                        <td><?php echo e($m->machine_name); ?></td>
                                                        <td><?php echo e($m->model_number); ?></td>
                                                        <td><?php echo e($m->machine_purchase_date); ?></td>
                                                        <td><?php echo e($m->machine_availability); ?></td>
                                                        <td><?php echo e($m->additional_details); ?></td>
                                                        <td> <div class="btn-group" role="group">
                                                        <a href="<?php echo e(route('admin.machines.edit', $m->machine_id)); ?>" class="btn btn-info"> Edit </a> 
                                                        <a href="<?php echo e(route('admin/machines/{machine_id}/allocationEdit',$m->machine_id)); ?>" class="btn btn-warning" > Allocate </a>
                                                        </div>
                                                        </td> 
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</div>
</div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\project2\resources\views/admin/machines/index.blade.php ENDPATH**/ ?>