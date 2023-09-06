<?php $__env->startSection('title','Material Detail'); ?>

<?php $__env->startSection('body'); ?>
    <main class="form-signin d-flex align-items-center justify-content-center">
        <div class="w-75 d-flex justify-content-center border border-5 rounded p-3">
            <form action="/save-class-assignment/<?php echo e($class_code); ?>/<?php echo e($assignment_id); ?>" method="POST" class="w-100 d-flex flex-column" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <label class="mb-1 mt-1 text-center" style="font-size:30px">Class Assignment</label>
                <div class="w-100 d-flex justify-content-center">
                    <div class="w-100 d-flex flex-column">
                        <div class="w-100 d-flex flex-column p-3">
                            <div class="w-100 d-flex flex-row">
                                <div class="w-50 form-group me-2">
                                    <label>Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" <?php if($assignment != null): ?> value="<?php echo e($assignment->title); ?>" <?php endif; ?>>
                                </div>
                                <div class="w-50 form-group mb-2">
                                    <label>Assignment Attachment</label>
                                    <input type="file" class="form-control" id="assignmentAttachment" name="assignmentAttachment">
                                </div>
                            </div>
                            <?php if($assignment_id == 0): ?>
                            <div class="form-group mb-2">
                                <label>Type</label>
                                <select name="assignmentType" id="assignmentType" class="form-control">
                                    <option value="ASSIGNMENT">ASSIGNMENT</option>
                                    <option value="EXERCISE">EXERCISE</option>
                                </select>
                            </div>
                            <?php endif; ?>

                            <div class="form-group mb-2">
                                <label>Description</label>
                                <textarea class="form-control" id="description" name="description" rows="4"><?php if($assignment != null): ?><?php echo e($assignment->description); ?><?php endif; ?></textarea>
                            </div>
                        </div>

                        <button class="w-50 btn btn-primary mt-2 mb-1 align-self-center" type="submit">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Base.Navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\WEB PROGRAMMING\huawenzhenhao\resources\views/ClassAssignmentsDetail.blade.php ENDPATH**/ ?>