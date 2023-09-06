<?php $__env->startSection('title','Result'); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <main class="text-center d-flex justify-content-center mt-3">
        <div class="w-75">
            <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="border border-2 rounded mb-2 bg-light">
                    <div class="d-flex justify-content-start p-2">
                        <div class="d-flex flex-column text-start w-75">
                            <h3><?php echo e($result->user_id); ?></h3>
                            <label>Answer:</label>
                            <a href="<?php echo e(asset('storage/files/assignments/answers/'.$result->answer)); ?>"><?php echo e($result->answer); ?></a>
                        </div>
                        <?php if(Auth::user()->role_code == 'LEC'): ?>
                            <form action="/save-class-assignment-result/<?php echo e($class_code); ?>/<?php echo e($assignment_id); ?>/<?php echo e($result->id); ?>" method="POST" class="d-flex flex-row w-25 align-items-center">
                                <?php echo csrf_field(); ?>
                                <div class="d-flex flex-column text-start">
                                    <h3 class="d-flex align-self-start">Score</h3>
                                    <input type="text" class="form-control" id="score" name="score" value="<?php echo e($result->score); ?>">
                                </div>
                                <button class="w-50 btn btn-primary mx-3 align-self-center" type="submit">Save</button>
                            </form>
                        <?php else: ?>
                            <div class="d-flex flex-row w-25 align-items-center">
                                <?php echo csrf_field(); ?>
                                <div class="d-flex flex-column text-start">
                                    <h3 class="d-flex align-self-start">Score</h3>
                                    <input type="text" class="form-control" id="score" name="score" readonly="true" value="<?php echo e($result->score); ?>">
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php if(Auth::user()->role_code == 'LEC'): ?>
                <a href="/export-assignment-result/<?php echo e($assignment_id); ?>" class="d-flex justify-content-end"><button class="w-25 btn btn-primary" type="submit">Export</button></a>
            <?php endif; ?>
        </div>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Base.Navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\WEB PROGRAMMING\huawenzhenhao\resources\views/ClassAssignmentsResult.blade.php ENDPATH**/ ?>