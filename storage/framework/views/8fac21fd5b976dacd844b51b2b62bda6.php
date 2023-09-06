<?php $__env->startSection('navbar'); ?>
<div class="w-100 d-flex flex-column p-1">
    <div class="d-flex flex-row" style="color:black;">
        <img src="<?php echo e(asset('images/assets/')); ?>" class="img-responsive" style="height:10vh; width:7vw;" alt="">
        <h1 class="ms-3"color="white">Sekolah Minggu Buddha Vihara Guna Vijaya</h1>
        <div class="ms-auto d-flex flex-row">
            <h1><?php echo e(Auth::user()->Role->description); ?></h1>
        </div>
    </div>
    <div style="height: 2px" class="bg-secondary mt-1"></div>
    <nav class="container-fluid navbar navbar-expand-lg">
        <div class="w-100 d-flex justify-content-around">
            <div class="btn-group dropdown">
                <div type="button" data-bs-toggle="dropdown">
                    <h1 class="btn btn-lg dropdown-toggle" role="button" id="dropdownSosializationMenu">Sosialization</h1>
                </div>
                <div class="dropdown-menu dropdown-menu-start" aria-labelledby="dropdownSosializationMenu">
                  <a class="dropdown-item" href="/">Forum</a>
                </div>
            </div>
            <div class="btn-group dropdown">
                <div type="button" data-bs-toggle="dropdown">
                    <h1 class="btn btn-lg dropdown-toggle" role="button" id="dropdownExternalizationMenu">Externalization</h1>
                </div>
                <div class="dropdown-menu dropdown-menu-start" aria-labelledby="dropdownSosializationMenu">
                    <a class="dropdown-item" href="/learning-classes/externalization-assignments">Assignment</a>
                    <a class="dropdown-item" href="/learning-classes/externalization-result">Result</a>
                </div>
            </div>
            <div class="btn-group dropdown">
                <div type="button" data-bs-toggle="dropdown">
                    <h1 class="btn btn-lg dropdown-toggle" role="button" id="dropdownSosializationMenu">Combination</h1>
                </div>
                <div class="dropdown-menu dropdown-menu-start" aria-labelledby="dropdownSosializationMenu">
                  <a class="dropdown-item" href="/learning-classes/combination">Learning</a>
                </div>
            </div>
            <div class="btn-group dropdown">
                <div type="button" data-bs-toggle="dropdown">
                    <h1 class="btn btn-lg dropdown-toggle" role="button" id="dropdownInternationalizationMenu">Internationalization</h1>
                </div>
                <div class="dropdown-menu dropdown-menu-start" aria-labelledby="dropdownSosializationMenu">
                    <a class="dropdown-item" href="/learning-classes/internalization-exercises">Exercise</a>
                    <a class="dropdown-item" href="/learning-classes/internalization-result">Result</a>
                </div>
            </div>
            <div class="btn-group dropdown">
                <div type="button" data-bs-toggle="dropdown">
                    <h1 class="btn btn-lg dropdown-toggle" role="button" id="dropdownOtherMenu">Other</h1>
                </div>
                <div class="dropdown-menu dropdown-menu-start" aria-labelledby="dropdownOtherMenu">
                  <?php if(Auth::user()->role_code == 'LEC'): ?>
                    <a class="dropdown-item" href="/new-forum">New Forum</a>
                    <a class="dropdown-item" href="/manage-users">Manage User</a>
                    <a class="dropdown-item" href="/manage-classes">Manage Class</a>
                  <?php endif; ?>
                  <a class="dropdown-item" href="/logout">logout</a>
                </div>
            </div>
        </div>
    </nav>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('Base.Master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampps\htdocs\huawenzhenhao\resources\views/base/navbar.blade.php ENDPATH**/ ?>