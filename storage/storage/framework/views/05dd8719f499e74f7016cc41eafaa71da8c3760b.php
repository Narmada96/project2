
<?php $__env->startSection('content'); ?>


<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">View expenses</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/admin')); ?>">Dashboard</a></li>
              <li class="breadcrumb-item active">View expenses</li>
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
           <table class="table table-bordered table-striped" id="expense_table">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">Expense ID</th>
                                                      <th scope="col">Project name</th>
                                                      <th scope="col">Time period start date</th>
                                                      <th scope="col">Time period end date</th>
                                                      <th scope="col">Amount given</th>
                                                      <th scope="col">Amount spent</th>
                                                      <th scope="col">Amount leftover</th>
                                                      <th scope="col">Receiver's name</th>
                                                     
                                                      <th> Actions </th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                
                                                  <?php $__currentLoopData = $expense; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($e->expense_id); ?></td>
                                                        <td><?php echo e($e->project_name); ?></td>
                                                        <td><?php echo e($e->money_given_start_date); ?></td>
                                                        <td><?php echo e($e->money_given_end_date); ?></td>
                                                        <td><?php echo e($e->amount_given); ?></td>
                                                        <td><?php echo e($e->amount_spent); ?></td>
                                                        <td><?php echo e($e->amount_leftover); ?></td>
                                                        <td><?php echo e($e->receiver_name); ?></td>
                                                        
                                                        </td> 
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</div>
</div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\project2\resources\views/admin/expenses/expenseview.blade.php ENDPATH**/ ?>