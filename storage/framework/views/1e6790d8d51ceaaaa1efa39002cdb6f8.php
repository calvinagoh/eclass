<?php $__env->startSection('title','Home'); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <main class="text-center d-flex justify-content-center mt-3">
        <div class="w-50">
            <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $forum): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="border border-2 rounded mb-2 bg-light p-1">
                    <div class="w-100 d-flex flex-row align-items-start p-1">
                        <div class="d-flex justify-content-start w-75">
                            <h3><?php echo e($forum->title); ?></h3>
                        </div>
                        <?php if(Auth::user()->role_code == 'LEC'): ?>
                            <div class="d-flex justify-content-end w-25 me-3">
                                <div class="btn-group dropdown">
                                    <div type="button" data-bs-toggle="dropdown">
                                        <img src="<?php echo e(asset('images/assets/more_icon.svg')); ?>" style="height:5vh" class="img-responsive" alt="">
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-start" aria-labelledby="dropdownForums">
                                    <a class="dropdown-item" href="/edit-forum/<?php echo e($forum->forum_id); ?>">Edit</a>
                                    <form action="/delete-forum/<?php echo e($forum->forum_id); ?>" method="post"><?php echo csrf_field(); ?><button class="dropdown-item" type="submit">Delete</button></form>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="post-content border-1 border-bottom d-flex justify-content-center" style="height:45vh">
                        <img src="<?php echo e(asset('storage/files/forums/'.$forum->forum_image)); ?>" class="img-responsive" alt="">
                    </div>
                    <div class="d-flex justify-content-start text-start p-2">
                        <p for="Post Description"><?php echo e($forum->forum_description); ?></p>
                    </div>
                    <div class="p-2 d-flex justify-content-between align-items-center">
                        <b ><?php echo e($forum->created_at); ?></b>
                        <a href="/forum-detail/<?php echo e($forum->forum_id); ?>"><button class="btn btn-primary">Comment</button></a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </main>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('Base.Navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\WEB PROGRAMMING\huawenzhenhao\resources\views/Home.blade.php ENDPATH**/ ?>