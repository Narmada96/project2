
<?php $__env->startSection('content'); ?>


<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Warranties</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/admin')); ?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Warranties</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
      <div class="container-fluid">
          <p>
              <a href="<?php echo e(route('admin.warranties.create')); ?>" class="btn btn-primary"> Add new warranty </a>
</p>

           <table class="table table-bordered table-striped" id="warranties_table">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">Warranty ID</th>
                                                      <th scope="col">Project ID</th>
                                                      <th scope="col">Project name</th>
                                                      <th scope="col">Customer name</th>
                                                      <th scope="col">Warranty start date</th>
                                                      <th scope="col">Warranty end date</th>
                                                      <th scope="col">Number of machine hours</th>
                                                      <th> Actions </th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                
                                                    <?php $__currentLoopData = $warranties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($w->warranty_id); ?></td>
                                                        <td><?php echo e($w->project_id); ?></td>
                                                        <td><?php echo e($w->project_name); ?></td>
                                                        <td><?php echo e($w->customer_name); ?></td>
                                                        <td><<?php echo e($w->warranty_start_date); ?></td>
                                                        <td><?php echo e($w->warranty_end_date); ?></td>
                                                        <td><?php echo e($w->machine_hours); ?></td>
                                                        <td> <a href="<?php echo e(route('admin.warranties.edit', $w->warranty_id)); ?>" class="btn btn-info"> Edit </a>  
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</div>
</div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\project2\resources\views/admin/warranties/index.blade.php ENDPATH**/ ?>