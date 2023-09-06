<?php $__env->startSection('title','User Profile'); ?>

<?php $__env->startSection('body'); ?>
    <main class="form-signin d-flex align-items-center justify-content-center">
        <div class="w-75 d-flex justify-content-center border border-5 rounded p-3 border-secondary" style="color:black;">
            <?php if($user != null): ?>
                <form action="/edit-user/<?php echo e($user->user_id); ?>" method="POST" class="w-100 d-flex flex-column">
                    <?php echo csrf_field(); ?>
                    <div class="w-100 d-flex justify-content-center">
                        <div class="w-100 d-flex flex-column">
                            <div class="w-100 d-flex flex-row">
                                <div class="w-50 d-flex flex-column p-3">
                                    <div class="form-group mb-2">
                                        <label>User ID</label>
                                        <input type="text" disabled="true" class="form-control" id="userId" name="userId" value="<?php echo e($user->user_id); ?>" placeholder="User ID">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Nama Lengkap</label>
                                        <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Nama Lengkap" value="<?php echo e($user->full_name); ?>">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Email address</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="example@gmail.com" value="<?php echo e($user->email); ?>">
                                    </div>
                                </div>
                                <div class="w-50 d-flex flex-column p-3">
                                    <div class="form-group mb-2">
                                        <label>Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Confirm Password</label>
                                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Password">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Kode Kelas</label>
                                        <input type="text" class="form-control" id="classCode" name="classCode" placeholder="Kode Kelas" value="<?php echo e($user->class_code); ?>">
                                    </div>
                                </div>
                            </div>

                            <button class="w-50 btn btn-primary mt-2 mb-1 align-self-center" type="submit">Save</button>
                        </div>
                    </div>
                </form>
            <?php else: ?>
                <form action="/save-new-user" method="POST" class="w-100 d-flex flex-column">
                    <?php echo csrf_field(); ?>
                    <div class="w-100 d-flex justify-content-center">
                        <div class="w-100 d-flex flex-column">
                            <div class="w-100 d-flex flex-row">
                                <div class="w-50 d-flex flex-column p-3">
                                    <div class="form-group mb-2">
                                        <label>User ID</label>
                                        <input type="text" class="form-control" id="userId" name="userId" placeholder="User ID">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Nama Lengkap</label>
                                        <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Nama Lengkap">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Email address</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="example@gmail.com">
                                    </div>
                                </div>
                                <div class="w-50 d-flex flex-column p-3">
                                    <div class="form-group mb-2">
                                        <label>Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Confirm Password</label>
                                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Password">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Kode Kelas</label>
                                        <input type="text" class="form-control" id="classCode" name="classCode" placeholder="Kode Kelas">
                                    </div>
                                </div>
                            </div>

                            <button class="w-50 btn btn-primary mt-2 mb-1 align-self-center" type="submit">Simpan</button>
                        </div>
                    </div>
                </form>
            <?php endif; ?>
        </div>
    </main>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('Base.Navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eclass\resources\views/Admin/UserProfile.blade.php ENDPATH**/ ?>