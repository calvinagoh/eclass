<?php $__env->startSection('title','Material Detail'); ?>

<?php $__env->startSection('body'); ?>
    <main class="form-signin d-flex align-items-center justify-content-center">
        <div class="w-75 d-flex justify-content-center border border-5 rounded p-3">
            <form action="/save-learning-material/<?php echo e($material_id); ?>" method="POST" class="w-100 d-flex flex-column" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <label class="mb-1 mt-1 text-center" style="font-size:30px">Learning Material</label>
                <div class="w-100 d-flex justify-content-center">
                    <div class="w-100 d-flex flex-column">
                        <div class="w-100 d-flex flex-row">
                            <div class="w-50 d-flex flex-column p-3">
                                <div class="form-group mb-2">
                                    <label>Module Code</label>
                                    <input type="text" class="form-control" id="moduleCode" name="moduleCode" placeholder="Module Code" <?php if($material != null): ?> value="<?php echo e($material->module_code); ?>" <?php endif; ?>>
                                </div>

                                <div class="form-group mb-2">
                                    <label>Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="4"><?php if($material != null): ?> <?php echo e($material->description); ?> <?php endif; ?></textarea>
                                </div>
                            </div>
                            <div class="w-50 d-flex flex-column p-3">
                                <div class="form-group mb-2">
                                    <label>Title</label>
                                    <input type="text" class="form-control" id="title" name="title" <?php if($material != null): ?> value="<?php echo e($material->title); ?>" <?php endif; ?> placeholder="Title">
                                </div>
                                <div class="form-group mb-2">
                                    <label>Video Link</label>
                                    <input type="text" class="form-control" id="videoLink" name="videoLink" <?php if($material != null): ?> value="<?php echo e($material->video_link); ?>" <?php endif; ?> placeholder="Video Link">
                                </div>
                                <div class="form-group mb-2">
                                    <label>Learning Material</label>
                                    <input type="file" class="form-control" id="learningMaterial" name="learningMaterial">
                                </div>
                            </div>
                        </div>

                        <button class="w-50 btn btn-primary mt-2 mb-1 align-self-center" type="submit">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('Base.Navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\WEB PROGRAMMING\huawenzhenhao\resources\views/LearningMaterialsDetail.blade.php ENDPATH**/ ?>