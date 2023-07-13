<div class="d-flex">
    <a href="<?php echo e(route('assets.show', ['asset' => $asset->id])); ?>" class="btn btn-outline-dark btn-sm me-2"><i
            class="bi-eye-fill"></i> Preview</a>
    <a href="<?php echo e(route('assets.edit', ['asset' => $asset->id])); ?>" class="btn btn-outline-dark btn-sm me-2"><i
            class="bi-pencil-square"></i> Edit</a>
    <div>
        <form action="<?php echo e(route('assets.destroy', ['asset' => $asset->id])); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('delete'); ?>
            <button type="submit" class="btn btn-outline-dark btn-sm
me-2"><i class="bi-trash"></i> Delete</button>
        </form>
    </div>
</div>
<?php /**PATH D:\ITTS\SEMESTER 6\Pemrograman Framework\masterBarangUTS\resources\views/asset/action.blade.php ENDPATH**/ ?>