
<?php $__env->startSection('content'); ?>


<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Customers</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/admin')); ?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Customers</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
      <div class="container-fluid">
          <p>
              <a href="<?php echo e(route('admin.customers.create')); ?>" class="btn btn-primary"> Add new customer </a>
</p>

           <table class="table table-bordered table-striped" id="customers_table">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">Customer ID</th>
                                                      <th scope="col">Name of company</th>
                                                      <th scope="col">Name of contact person</th>
                                                      <th scope="col">NIC of contact person</th>
                                                      <th scope="col">Contact number</th>
                                                      <th scope="col">Designation</th>
                                                      <th scope="col">Company address</th>
                                                      <th scope="col">E-mail</th>
                                                      <!--th scope="col">Project ID</th>
                                                      <th scope="col">Project name</th>
                                                      <th scope="col">Project location</th>  
                                                      <th scope="col">Project start date</th>       
                                                      <th scope="col">Estimated project end date</th>               
                                                      <th scope="col">Warranty ID</th>
                                                      <th scope="col">Warranty details</th-->
                                                      <th> Actions </th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                
                                                    <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($c->customer_id); ?></td>
                                                        <td><?php echo e($c->name_of_company); ?></td>
                                                        <td><?php echo e($c->name_of_contact_person); ?></td>
                                                        <td><?php echo e($c->nic_of_contact_persond); ?></td>
                                                        <td><?php echo e($c->contact_number); ?></td>
                                                        <td><?php echo e($c->designation); ?></td>
                                                        <td><?php echo e($c->company_address); ?></td>
                                                        <td><?php echo e($c->email); ?></td>
                                                        <!--td><?php echo e($c->project_id); ?></td>
                                                        <td><?php echo e($c->project_name); ?></td>
                                                        <td><?php echo e($c->project_location); ?></td>
                                                        <td><?php echo e($c->project_start_date); ?></td>
                                                        <td><?php echo e($c->estimated_project_end_date); ?></td>
                                                        <td><?php echo e($c->warranty_id); ?></td>
                                                        <td><?php echo e($c->warranty_details); ?></td-->
                                                        <td> <a href="" class="btn btn-info"> Edit </a>  
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</div>
</div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\project2\resources\views/admin/customers/index.blade.php ENDPATH**/ ?>