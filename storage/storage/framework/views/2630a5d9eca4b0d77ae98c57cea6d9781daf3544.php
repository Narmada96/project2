
<?php $__env->startSection('content'); ?>


<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Estimates</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/admin')); ?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Estimates</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
      <div class="container-fluid">
          <p>
              <a href="<?php echo e(route('admin.estimates.create')); ?>" class="btn btn-primary"> Add new estimate </a>
</p>

           <table class="table table-bordered table-striped" id="estimates_table">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">Estimate ID</th>
                                                      <th scope="col">Project name</th>

                                                      <th scope="col">Number of internal workers</th>
                                                      <th scope="col">Cost per internal worker</th>
                                                      <th scope="col">No. of hours worked by internal workers</th>
                                                      <th scope="col">No. of days worked by internal workers</th>
                                                      <th scope="col">Total cost per internal workers</th>

                                                      <th scope="col">Number of external workers</th>
                                                      <th scope="col">Cost per external worker</th>
                                                      <th scope="col">No. of hours worked by external workers</th>
                                                      <th scope="col">No. of days worked by external workers</th>
                                                      <th scope="col">Total cost per external workers</th>

                                                      <th scope="col">Number of internal machines</th>
                                                      <th scope="col">Cost per internal machine</th>
                                                      <th scope="col">No. of hours worked by internal machines</th>
                                                      <th scope="col">No. of days worked by internal machines</th>
                                                      <th scope="col">Total cost per internal machines</th>

                                                      <th scope="col">Number of external machines</th>
                                                      <th scope="col">Cost per external machines</th>
                                                      <th scope="col">No. of hours worked by external machines</th>
                                                      <th scope="col">No. of days worked by external machines</th>
                                                      <th scope="col">Total cost per external machines</th>

                                                      <th scope="col">Cost for spare parts</th>

                                                      <th scope="col">Total variable cost</th>
                                                      <th scope="col">Overhead rate</th>
                                                      <th scope="col">Variable overhead cost</th>

                                                      <th scope="col">NBT rate</th>
                                                      <th scope="col">Variable cost and NBT</th>

                                                      <th scope="col">VAT rate</th>
                                                      <th scope="col">Total cost</th>

                                                      <th scope="col">Profit</th>
                                                      <th scope="col">Total cost charged from customer</th>

                                                      <th> Actions </th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                
                                                    <?php $__currentLoopData = $estimates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($e->estimate_id); ?></td>
                                                        <td><?php echo e($e->project_name); ?></td>

                                                        <td><?php echo e($e->internal_no_of_workers); ?></td>
                                                        <td><?php echo e($e->internal_cost_per_worker); ?></td>
                                                        <td><?php echo e($e->internal_hours_per_day_per_worker); ?></td>
                                                        <td><?php echo e($e->internal_days_per_worker); ?></td>
                                                        <td><?php echo e($e->total_cost_internal_worker); ?></td>

                                                        <td><?php echo e($e->external_no_of_workers); ?></td>
                                                        <td><?php echo e($e->external_cost_per_worker); ?></td>
                                                        <td><?php echo e($e->external_hours_per_day_per_worker); ?></td>
                                                        <td><?php echo e($e->external_days_per_worker); ?></td>
                                                        <td><?php echo e($e->total_cost_external_worker); ?></td>

                                                        <td><?php echo e($e->internal_no_of_machines); ?></td>
                                                        <td><?php echo e($e->internal_cost_per_machine_hour); ?></td>
                                                        <td><?php echo e($e->internal_hours_per_day_per_machine); ?></td>
                                                        <td><?php echo e($e->internal_days_per_machine); ?></td>
                                                        <td><?php echo e($e->total_cost_internal_machine); ?></td>

                                                        <td><?php echo e($e->external_no_of_machines); ?></td>
                                                        <td><?php echo e($e->external_cost_per_machine_hour); ?></td>
                                                        <td><?php echo e($e->external_hours_per_day_per_machine); ?></td>
                                                        <td><?php echo e($e->external_days_per_machine); ?></td>
                                                        <td><?php echo e($e->total_cost_external_machine); ?></td>

                                                        <td><?php echo e($e->spare_part_cost); ?></td>

                                                        <td><?php echo e($e->variable_cost); ?></td>
                                                        <td><?php echo e($e->overhead_rate); ?></td>
                                                        <td><?php echo e($e->variable_overhead_cost); ?></td>

                                                        <td><?php echo e($e->nbt_rate); ?></td>
                                                        <td><?php echo e($e->variable_cost_plus_nbt); ?></td>

                                                        <td><?php echo e($e->vat_rate); ?></td>
                                                        <td><?php echo e($e->total_cost); ?></td>

                                                        <td><?php echo e($e->profit); ?></td>
                                                        <td><?php echo e($e->cost_charged_from_customer); ?></td>
                                                        <td> <a href="" class="btn btn-info"> Edit </a>  
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</div>
</div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\project2\resources\views/admin/estimates/index.blade.php ENDPATH**/ ?>