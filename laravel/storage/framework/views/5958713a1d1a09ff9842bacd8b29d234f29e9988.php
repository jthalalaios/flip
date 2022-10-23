<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('flip-user.store')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left"><?php echo e(__('Name')); ?></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                                <?php if($errors->has('name')): ?>
                                <span class="invalid-feedback">
                                    <<p style="color:red">><?php echo e($errors->first('name')); ?></p>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fullname" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Full name')); ?></label>

                            <div class="col-md-6">
                                <input id="fullname" type="text" class="form-control<?php echo e($errors->has('fullname') ? ' is-invalid' : ''); ?>" name="fullname" value="<?php echo e(old('fullname')); ?>" required autofocus>

                                <?php if($errors->has('fullname')): ?>
                                <span class="invalid-feedback">
                                    <<p style="color:red">><?php echo e($errors->first('fullname')); ?></p>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Email')); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required autofocus>

                                <?php if($errors->has('email')): ?>
                                <span class="invalid-feedback">
                                    <p style="color:red"><?php echo e($errors->first('email')); ?></p>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Phone')); ?></label>

                            <div class="col-md-6">
                                <input id="phone" type="phone" class="form-control<?php echo e($errors->has('phone') ? ' is-invalid' : ''); ?>" name="phone" value="<?php echo e(old('phone')); ?>" required>

                                <?php if($errors->has('phone')): ?>
                                <span class="invalid-feedback">
                                    <p style="color:red"><?php echo e($errors->first('phone')); ?></p>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date_of_birth" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Date of birth')); ?></label>

                            <div class="col-md-6">
                                <input id="date_of_birth" type="date_of_birth" class="form-control<?php echo e($errors->has('date_of_birth') ? ' is-invalid' : ''); ?>" name="date_of_birth" required>

                                <?php if($errors->has('date_of_birth')): ?>
                                <span class="invalid-feedback">
                                    <p style="color:red"><?php echo e($errors->first('date_of_birth')); ?></p>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date_of_birth" class="col-md-6 col-form-label text-md-right"></label>

                            <div class="col-md-6">

                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Register')); ?>

                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/register.blade.php ENDPATH**/ ?>