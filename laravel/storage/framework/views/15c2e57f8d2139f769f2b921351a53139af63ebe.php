<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">A/A</th>
                                <th scope="col">Name</th>
                                <th scope="col">Fullname</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Date of birth</th>
                            </tr>
                        </thead>
                        <?php if(isset($flip_users)): ?>
                        <?php $__currentLoopData = $flip_users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $flip_user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?php echo e($loop->iteration); ?></th>
                                <td><?php echo e($flip_user['name']); ?></td>
                                <td><?php echo e($flip_user['fullname']); ?></td>
                                <td><?php echo e($flip_user['email']); ?></td>
                                <td><?php echo e($flip_user['phone']); ?></td>
                                <td><?php echo e(date('Y-M-d', strtotime($flip_user['date_of_birth']))); ?></td>
                            </tr>
                        </tbody>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/home.blade.php ENDPATH**/ ?>