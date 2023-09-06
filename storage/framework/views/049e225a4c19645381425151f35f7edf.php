<?php $__env->startSection('title','Manage Users'); ?>

<?php $__env->startSection('body'); ?>
    <main class="d-flex justify-content-center mt-3 p-1">
        <div class="w-50">
            <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="border border-2 rounded mb-2 bg-light">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex flex-column p-2">
                            <h2 for="Class Code"><?php echo e($user->user_id); ?></h2>
                            <b ><?php echo e($user->class_code); ?></b>
                            <label for="" class="mt-2"><?php echo e($user->full_name); ?></label>
                        </div>
                        
                        <div class="d-flex align-self-center flex-column p-2">
                            <div class="d-flex flex-column">
                                <a href="/user-profile/<?php echo e($user->user_id); ?>">
                                    <button class="btn btn-warning" style="width:80px">Edit</button>
                                </a>
                            </div>
                            <form action="/delete-user/<?php echo e($user->user_id); ?>" method="POST" class="mt-3">
                                <?php echo csrf_field(); ?>
                                <button class="btn btn-danger" type="submit" style="width:80px">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <a class="text-decoration-none text-dark" href="/new-user">
                <button class="btn btn-primary w-100 mt-3 mb-1">New User</button>
            </a>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Base.Navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\WEB PROGRAMMING\huawenzhenhao\resources\views/Admin/ManageUsers.blade.php ENDPATH**/ ?>