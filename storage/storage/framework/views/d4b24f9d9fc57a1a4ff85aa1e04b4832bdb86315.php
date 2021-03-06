
<?php $__env->startSection('content'); ?>


<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Projects</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/admin')); ?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Projects</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
      <div class="container-fluid">
          <p>
              <a href="<?php echo e(route('admin.projects.create')); ?>" class="btn btn-primary"> Add new project </a>
              <a href="" class="btn btn-secondary"> Create report </a>
</p>

           <table class="table table-bordered table-striped" id="projects_table">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">Project ID</th>
                                                      <th scope="col">Project Type</th>
                                                      <th scope="col">Project name</th>
                                                      <th scope="col">Project location</th>
                                                      <th scope="col">Customer name</th>
                                                      <th scope="col">Contact number</th>
                                                      <th scope="col">E-mail</th>
                                                      <th scope="col">Project start date</th>
                                                      <th scope="col">Estimated project end date</th>
                                                      <th> Actions </th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                
                                                    <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($p->project_id); ?></td>
                                                        <td><?php echo e($p->project_type); ?></td>
                                                        <td><?php echo e($p->project_name); ?></td>
                                                        <td><?php echo e($p->project_location); ?></td>
                                                        <td><?php echo e($p->customer_name); ?></td>
                                                        <td><?php echo e($p->contact_number); ?></td>
                                                        <td><?php echo e($p->email); ?></td>
                                                        <td><<?php echo e($p->project_start_date); ?></td>
                                                        <td><<?php echo e($p->estimated_project_end_date); ?></td>
                                                        <td> <div class="btn-group" role="group">
                                                             <a href="<?php echo e(route('admin.projects.edit', $p->project_id)); ?>" class="btn btn-info"> Edit </a>  
                                                             <a href="" class="btn btn-success" > View </a>
                                                        </div>
                                                        </td> 
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                   
                                                        
</table>
</div>
</div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\project2\resources\views/admin/projects/index.blade.php ENDPATH**/ ?>