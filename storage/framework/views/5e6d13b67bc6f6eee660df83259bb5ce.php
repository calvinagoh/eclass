<?php $__env->startSection('title','Classes'); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <main class="d-flex justify-content-center mt-3 p-1">
        <div class="w-50">
            <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a class="text-decoration-none text-dark"
                    <?php if($source == 'combination'): ?> href="/learning-materials/<?php echo e($class->module_code); ?>" <?php endif; ?>
                    <?php if($source == 'externalization-assignments'): ?> href="/class-assignments/<?php echo e($class->class_code); ?>" <?php endif; ?>
                    <?php if($source == 'internalization-exercises'): ?> href="/class-exercises/<?php echo e($class->class_code); ?>" <?php endif; ?>
                    <?php if($source == 'externalization-result'): ?> href="/class-assignments/<?php echo e($class->class_code); ?>/result" <?php endif; ?>
                    <?php if($source == 'internalization-result'): ?> href="/class-exercises/<?php echo e($class->class_code); ?>/result" <?php endif; ?>>
                    <div class="border border-2 rounded mb-2 bg-light">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex flex-column p-2">
                                <h5 for="Class Code"><?php echo e($class->class_code); ?></h5>
                                <label for="Description"><?php echo e($class->description); ?></label>
                            </div>
                            <div class="d-flex align-self-center">
                                <img src="<?php echo e(asset('images/assets/next_icon.png')); ?>" class="img-responsive" style="height:40px" alt="">
                            </div>
                        </div>
                    </div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </main>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('base.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\WEB PROGRAMMING\huawenzhenhao\resources\views/LearningClasses.blade.php ENDPATH**/ ?>