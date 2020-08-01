
<?php $__env->startSection('content'); ?>


<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Suppliers</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/admin')); ?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Suppliers</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
      <div class="container-fluid">
          <p>
              <a href="<?php echo e(route('admin.suppliers.create')); ?>" class="btn btn-primary"> Add new supplier </a>
</p>

           <table class="table table-bordered table-striped" id="suppliers_table">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">Supplier ID</th>
                                                      <th scope="col">Supplier company name</th>
                                                      <th scope="col">Name of contact person</th>
                                                      <th scope="col">Contact number</th>
                                                      <th scope="col">E-mail</th>
                                                      <th scope="col">Address</th>
                                                      <th scope="col">Hired date</th>
                                                      <th scope="col">Estimated work end date</th>
                                                      <th scope="col">Additional remarks</th>
                                                      <th> Actions </th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                
                                                    <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($s->supplier_id); ?></td>
                                                        <td><?php echo e($s->supplier_company_name); ?></td>
                                                        <td><?php echo e($s->name_of_contact_person); ?></td>
                                                        <td><?php echo e($s->supplier_contact_number); ?></td>
                                                        <td><?php echo e($s->supplier_email); ?></td>
                                                        <td><?php echo e($s->supplier_address); ?></td>
                                                        <td><?php echo e($s->hired_date); ?></td>
                                                        <td><?php echo e($s->estimated_work_end_date); ?></td>
                                                        <td><<?php echo e($s->additional_remarks); ?></td>
                                                        <td> <a href="<?php echo e(route('admin.suppliers.edit', $s->supplier_id)); ?>" class="btn btn-info"> Edit </a>  
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</div>
</div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\project2\resources\views/admin/suppliers/index.blade.php ENDPATH**/ ?>