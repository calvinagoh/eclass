<?php $__env->startSection('title','Assignments'); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <main class="d-flex justify-content-center mt-3 p-1" style="color:black;">
        <div class=" w-75">
        <?php if(Auth::user()->role_code == 'LEC' && $type == ''): ?>
                <div class="w-100 justify-content-center mb-2">
                    <a href="/class-assignments-detail/<?php echo e($class_code); ?>/0">
                        <button class="btn btn-primary w-100">Tambah Soal</button>
                    </a>
                </div>
            <?php endif; ?>
            <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $assignment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
                <?php if($type != ''): ?>
                    <a class="text-decoration-none text-dark" href="/class-assignments-result/<?php echo e($class_code); ?>/<?php echo e($assignment->id); ?>">
                        <div class="border border-2 rounded border-secondary mb-2 bg-light" style="color:black;">
                            <div class="d-flex justify-content-between" style="color:black;">
                                <div class="d-flex flex-column p-2" style="color:black;">
                                    <h5 for="Class Code"><?php echo e($assignment->title); ?></h5>
                                    <label for="Description" style="color:black;"><?php echo e($assignment->description); ?></label>
                                </div>
                            </div>
                        </div>
                    </a>
                    
                <?php elseif(Auth::user()->role_code == 'STD'): ?>
                    <a class=" border-secondary text-decoration-none text-dark" href="/upload-class-assignments/<?php echo e($class_code); ?>/<?php echo e($assignment->id); ?>">
                        <div class="border border-2 rounded border-secondary mb-2 bg-light">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex flex-column p-2">
                                    <h5 for="Class Code" style="color:black;"><?php echo e($assignment->title); ?></h5>
                                    <label for="Description" style="color:black;"><?php echo e($assignment->description); ?></label>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php elseif(Auth::user()->role_code == 'LEC'): ?>
                <div class="text-decoration-none text-dark" href="/class-assignments-detail/<?php echo e($class_code); ?>/<?php echo e($assignment->id); ?>">
                        <div class="border border-2 border-secondary rounded mb-2 bg-light">
                            <div class=" d-flex justify-content-between">
                                <div class="d-flex flex-column p-2">
                                    <h5 for="Class Code"><?php echo e($assignment->title); ?></h5>
                                    <label for="Description"><?php echo e($assignment->description); ?></label>
                                </div>
                                <div class="d-flex align-self-center flex-column p-2">
                                    <div class="d-flex flex-column">
                                        <a href="/class-assignments-detail/<?php echo e($class_code); ?>/<?php echo e($assignment->id); ?>">
                                            <button class="btn btn-warning" style="width:80px">Edit</button>
                                        </a>
                                    </div>
                                    <form action="/delete-class-assignment/<?php echo e($class_code); ?>/<?php echo e($assignment->id); ?>" method="POST" class="mt-3">
                                        <?php echo csrf_field(); ?>
                                        <button class="btn btn-danger" type="submit" style="width:80px">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </main>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('base.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eclass - Copy\resources\views/ClassAssignments.blade.php ENDPATH**/ ?>