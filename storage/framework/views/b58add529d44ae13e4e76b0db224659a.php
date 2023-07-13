<?php
    $currentRouteName = Route::currentRouteName();
?>

<nav class="navbar navbar-expand-md navbar-dark bg-info">
    <div class="container">
        <a href="<?php echo e(route('home')); ?>" class="navbar-brand mb-0 h1"><i class="bi-pie-chart-fill me-2"></i>Computer Lab</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <hr class="d-lg-none text-white-50">
            <ul class="navbar-nav flex-row flex-wrap">
                <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('home')); ?>" class="nav-link active">Home</a></li>
                <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('assets.index')); ?>" class="nav-link active">List Asset</a></li>
            </ul>
            <hr class="d-lg-none text-white-50">
        </div>
    </div>
</nav>
<?php /**PATH D:\ITTS\SEMESTER 6\Pemrograman Framework\masterBarangUTS\resources\views/layout/nav.blade.php ENDPATH**/ ?>