<?php $__env->startSection('title','Classes'); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <main class="border-secondary d-flex justify-content-center mt-3 p-1">
        <div class="w-75" style="color:black;">
        <a class="text-decoration-none text-dark" href="/new-class">
                <button class="btn btn-primary w-100 mt-3 mb-1">Kelas Baru</button>
            </a>
            <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="border border-2 rounded mb-2 bg-light">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex flex-column p-2">
                            <h5 for="Class Code"><?php echo e($class->class_code); ?></h5>
                            <label for="Description"><?php echo e($class->description); ?></label>
                            <b  class="mt-2"><?php echo e($class->module_code); ?></b>
                        </div>
                        <div class="d-flex align-self-center flex-column p-2">
                            <div class="d-flex flex-column">
                                <a href="/edit-class/<?php echo e($class->class_code); ?>">
                                    <button class="btn btn-warning" style="width:80px">Edit</button>
                                </a>
                            </div>
                            <form action="/delete-class/<?php echo e($class->class_code); ?>" method="POST" class="mt-3">
                                <?php echo csrf_field(); ?>
                                <button class="btn btn-danger" type="submit" style="width:80px">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </main>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('base.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eclass - Copy\resources\views/ManageClasses.blade.php ENDPATH**/ ?>