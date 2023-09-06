<?php $__env->startSection('title','Assignment Detail'); ?>

<?php $__env->startSection('body'); ?>
    <main class="form-signin d-flex align-items-center justify-content-center">
        <div class="w-75 d-flex justify-content-center border border-5 rounded p-3">
            <form action="/upload-class-assignments/<?php echo e($class_code); ?>/<?php echo e($assignment_id); ?>" method="POST" class="w-100 d-flex flex-column" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <label class="mb-1 mt-1 text-center" style="font-size:30px"><?php echo e($assignment->title); ?></label>
                <div class="w-100 d-flex justify-content-center">
                    <div class="w-100 d-flex flex-column">
                        <div class="w-100 d-flex flex-column p-3">
                            <div class="form-group mb-2">
                                <label>Description</label>
                                <textarea class="form-control" id="description" name="description" rows="4"><?php if($assignment != null): ?><?php echo e($assignment->description); ?><?php endif; ?></textarea>
                            </div>
                            <div class="w-100 d-flex flex-row">
                                <div class="form-group mt-1">
                                    <?php if($assignment->attachment != null && $assignment->attachment != ''): ?>
                                        <label>Attachment: </label>
                                        <a href="<?php echo e(asset('storage/files/assignments/questions/'.$assignment->attachment)); ?>"><?php echo e($assignment->attachment); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group mb-2 mt-4">
                                <label>Answer</label>
                                <input type="file" class="form-control" id="answer" name="answer">
                            </div>
                        </div>

                        <button class="w-50 btn btn-primary mt-2 mb-1 align-self-center" type="submit">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Base.Navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\WEB PROGRAMMING\huawenzhenhao\resources\views/UploadClassAssignment.blade.php ENDPATH**/ ?>