<?php $__env->startSection('content'); ?>
    <div class="container-sm my-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-4 border">
                <div class="mb-3 text-center">
                    <i class="bi-person-circle fs-1"></i>
                    <h4>Preview</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="assetCode" class="form-label">Asset Code</label>
                        <h5><?php echo e($asset->assetCode); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="assetName" class="form-label">Asset Name</label>
                        <h5><?php echo e($asset->assetName); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="assetPrice" class="form-label">Price</label>
                        <h5><?php echo e($asset->assetPrice); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="assetDescription" class="form-label">Description</label>
                        <h5><?php echo e($asset->assetDescription); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="type_id" class="form-label">Type Code</label>
                        <h5><?php echo e($asset->type->typeName); ?></h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 d-grid">
                        <a href="<?php echo e(route('assets.index')); ?>" class="btn btn-outline-dark btn-lg mt-3"><i
                                class="bi-arrow-left-circle me-2"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ITTS\SEMESTER 6\Pemrograman Framework\masterBarangUTS\resources\views/asset/show.blade.php ENDPATH**/ ?>