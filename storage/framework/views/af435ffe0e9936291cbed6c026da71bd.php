<?php $__env->startSection('content'); ?>
    <div class="container-sm mt-5">
        <form action="<?php echo e(route('assets.update', ['asset' => $asset->id])); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    <div class="mb-3 text-center">
                        <i class="bi-person-circle fs-1"></i>
                        <h4>Edit Asset</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="assetCode" class="form-label">Kode asset</label>
                            <input class="form-control " type="text" name="assetCode" id="assetCode"
                                value="<?php echo e($errors->any() ? old('assetCode') : $asset->assetCode); ?>"
                                placeholder="Masukan Kode Terbaru asset">
                            <?php $__errorArgs = ['assetCode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="text-danger"><?php echo e($message); ?></small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="assetName" class="form-label">Nama asset</label>
                            <input class="form-control " type="text" name="assetName" id="assetName"
                                value="<?php echo e($errors->any() ? old('assetName') : $asset->assetName); ?>"
                                placeholder="Masukan Nama Terbaru asset">
                            <?php $__errorArgs = ['assetName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="text-danger"><?php echo e($message); ?></small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="assetPrice" class="form-label">Harga asset</label>
                            <input class="form-control " type="text" name="assetPrice" id="assetPrice"
                                value="<?php echo e($errors->any() ? old('assetPrice') : $asset->assetPrice); ?>"
                                placeholder="Masukan Harga Terbaru asset">
                            <?php $__errorArgs = ['assetPrice'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="text-danger"><?php echo e($message); ?></small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="col-md-13 mb-3">
                            <label for="assetDescription" class="form-label">Deskripsi asset</label>
                            <input class="form-control " type="text" name="assetDescription" id="assetDescription"
                                value="<?php echo e($errors->any() ? old('assetDescription') : $asset->assetDescription); ?>"
                                placeholder="Masukan Deskripsi Terbaru asset">
                            <?php $__errorArgs = ['assetDescription'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="text-danger"><?php echo e($message); ?></small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="type" class="form-label">ID type</label>
                            <select name="type" id="type" class="form-select">
                                <?php
                                    $selected = '';
                                    if ($errors->any()) {
                                        $selected = old('type');
                                    } else {
                                        $selected = $asset->type_id;
                                    }
                                ?>
                                <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($type->id); ?>" <?php echo e($selected == $type->id ? 'selected' : ''); ?>>
                                        <?php echo e($type->typeCode .
                                            ' -
                                                                    ' .
                                            $type->typeName); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger"><small><?php echo e($message); ?></small></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>


                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="<?php echo e(route('assets.index')); ?>" class="btn btn-outline-dark btn-lg mt-3"><i
                                    class="bi-arrow-left-circle me-2"></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i>
                                Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ITTS\SEMESTER 6\Pemrograman Framework\masterBarangUTS\resources\views/asset/edit.blade.php ENDPATH**/ ?>