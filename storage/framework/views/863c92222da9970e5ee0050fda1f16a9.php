<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <title><?php echo $__env->yieldContent('title'); ?></title>
    <?php echo $__env->yieldContent('css'); ?>

</head>
<body style="background:#C8E4B2; color:black;" >
    <?php if($errors->any()): ?>
        <div class="alert alert-dismissable alert-danger d-flex" id="alert" role="alert">
            <strong class="flex-fill">
                <?php echo e($errors->first()); ?>

            </strong>
            <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="alert"></button>
        </div>
    <?php elseif($message = Session::get('success')): ?>
        <div class="alert alert-dismissable alert-success d-flex" id="alert" role="alert">
            <strong class="flex-fill">
                <?php echo e($message); ?>

            </strong>
            <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="alert"></button>
        </div>
    <?php elseif($message = Session::get('fail')): ?>
        <div class="alert alert-dismissable alert-danger d-flex" id="alert" role="alert">
            <strong class="flex-fill">
                <?php echo e($message); ?>

            </strong>
            <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>

    <?php echo $__env->yieldContent('navbar'); ?>

    <?php echo $__env->yieldContent('body'); ?>


    <script>
        $(document).ready(function()
        {
            $('.imageButton').on('click', function(e)
            {
                $(this).closest('form').submit();
            });
            $('.imageInput').change(function()
            {
                let reader = new FileReader();
                reader.onload = (e) =>
                {
                    $('.imagePreview').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });
        });

        <?php echo $__env->yieldContent('scripts'); ?>
    </script>


</body>
</html>





<?php /**PATH C:\xampp\htdocs\eclass\resources\views/base/Master.blade.php ENDPATH**/ ?>