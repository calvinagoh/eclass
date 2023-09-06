<?php $__env->startSection('title','Forum Detail'); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <main class="text-center d-flex justify-content-center mt-3">
        <div class="w-50">
            <div class="border border-2 rounded mb-2 bg-light">
                <div class="post-content border-1 border-bottom d-flex justify-content-center" style="height:45vh">
                    <img src="<?php echo e(asset('storage/files/forums/'.$forum->forum_image)); ?>" class="img-responsive" alt="">
                </div>
                <div class="post-footer d-flex justify-content-start text-start p-2">
                    <p for="Post Description"><?php echo e($forum->forum_description); ?></p>
                </div>
                <div class="p-2">
                    <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="border border-2 mb-2 d-flex flex-column p-2">
                            <div class="d-flex justify-content-between">
                                <h5><?php echo e($comment->user_id); ?></h5>
                                <h6><?php echo e($comment->created_at); ?></h6>
                            </div>
                            <label class="text-start"><?php echo e($comment->comment); ?></label>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <form action="/save-forum-detail/<?php echo e($forum->forum_id); ?>" method="POST" class="w-100 d-flex flex-row p-2 mb-2">
                    <?php echo csrf_field(); ?>
                    <div class="w-75 form-group me-2">
                        <textarea class="form-control" id="comment" placeholder="Comment" name="comment" rows="1"></textarea>
                    </div>
                    <div class="w-25 form-group me-2">
                        <button class="w-100 btn btn-primary align-self-center" type="submit">Comment</button>
                    </div>
                </form>
            </div>

        </div>
    </main>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('Base.Navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\huawenzhenhao\resources\views/ForumDetail.blade.php ENDPATH**/ ?>