<?php $__env->startSection('title','Learning Materials'); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <main class="text-center d-flex justify-content-center mt-3">
        <div class="w-50">
            <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $material): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="border border-2 rounded mb-2 bg-light">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex flex-column text-start p-2 w-100">
                            <h6 for="Class Code"><?php echo e($material->title); ?></h6>
                            <label for="Description"><?php echo e($material->description); ?></label>
                            <div class="d-flex justify-content-around mt-5">
                                <a href="<?php echo e(asset('storage/files/'.$material->material_link)); ?>"><button class="btn btn-primary" style="width:100px">Material</button></a>
                                <a href="<?php echo e($material->video_link); ?>"><button class="btn btn-primary" style="width:100px">Video</button></a>
                            </div>
                        </div>
                        <div class="d-flex align-self-center flex-column pe-2">
                            <?php if(Auth::user()->role_code == 'LEC'): ?>
                                <div class="d-flex flex-column">
                                    <a href="/learning-materials-detail/<?php echo e($material->id); ?>">
                                        <button class="btn btn-warning" style="width:80px">Edit</button>
                                    </a>
                                </div>
                                <form action="/delete-learning-material/<?php echo e($material->id); ?>" method="POST" class="mt-3">
                                    <?php echo csrf_field(); ?>
                                    <button class="btn btn-danger" type="submit" style="width:80px">Delete</button>
                                </form>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php if(Auth::user()->role_code == 'LEC'): ?>
            <a href="/learning-materials-detail/0" >
                <button class="w-100 btn btn-success mb-3 mt-1">New Material</button>
            </a>
            <?php endif; ?>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Base.Navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\huawenzhenhao\resources\views/LearningMaterials.blade.php ENDPATH**/ ?>