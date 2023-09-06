<?php $__env->startSection('title','User Profile'); ?>

<?php $__env->startSection('body'); ?>
    <main class="form-signin d-flex align-items-center justify-content-center">
        <div class="w-75 d-flex justify-content-center border border-5 rounded p-3">
            <?php if($class != null): ?>
                <form action="/save-edit-class/<?php echo e($class->class_code); ?>" method="POST" class="w-100 d-flex flex-column">
                    <?php echo csrf_field(); ?>
                    <div class="w-100 d-flex justify-content-center">
                        <div class="w-100 d-flex flex-column">
                            <div class="w-100 d-flex flex-row">
                                <div class="w-50 d-flex flex-column p-3">
                                    <div class="form-group mb-2">
                                        <label>Class Code</label>
                                        <input type="text" disabled="true" class="form-control" id="classCode" name="classCode" placeholder="Class Code" value="<?php echo e($class->class_code); ?>">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Description</label>
                                        <textarea class="form-control" id="description" name="description" rows="4" placeholder="Description"><?php echo e($class->description); ?></textarea>
                                    </div>
                                </div>
                                <div class="w-50 d-flex flex-column p-3">
                                    <div class="form-group mb-2">
                                        <label>Module Code</label>
                                        <select id="moduleCode" name="moduleCode" class="form-control">
                                            <option value="10" <?php if($class->module_code == '10'): ?> selected <?php endif; ?>>10</option>
                                            <option value="11" <?php if($class->module_code == '11'): ?> selected <?php endif; ?>>11</option>
                                            <option value="12" <?php if($class->module_code == '12'): ?> selected <?php endif; ?>>12</option>
                                            <option value="REGULER" <?php if($class->module_code == 'REGULER'): ?> selected <?php endif; ?>>REGULER</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <button class="w-50 btn btn-primary mt-2 mb-1 align-self-center" type="submit">Save</button>
                        </div>
                    </div>
                </form>
            <?php else: ?>
                <form action="/save-new-class" method="POST" class="w-100 d-flex flex-column">
                    <?php echo csrf_field(); ?>
                    <div class="w-100 d-flex justify-content-center">
                        <div class="w-100 d-flex flex-column">
                            <div class="w-100 d-flex flex-row">
                                <div class="w-50 d-flex flex-column p-3">
                                    <div class="form-group mb-2">
                                        <label>Class Code</label>
                                        <input type="text" class="form-control" id="classCode" name="classCode"  placeholder="Class Code">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Description</label>
                                        <textarea class="form-control" id="description" name="description" rows="4" placeholder="Description"></textarea>
                                    </div>
                                </div>
                                <div class="w-50 d-flex flex-column p-3">
                                    <div class="form-group mb-2">
                                        <label>Module Code</label>
                                        <select id="moduleCode" name="moduleCode" class="form-control">
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="REGULER">REGULER</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <button class="w-50 btn btn-primary mt-2 mb-1 align-self-center" type="submit">Save</button>
                        </div>
                    </div>
                </form>
            <?php endif; ?>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Base.Navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\huawenzhenhao\resources\views/ManageClassDetail.blade.php ENDPATH**/ ?>