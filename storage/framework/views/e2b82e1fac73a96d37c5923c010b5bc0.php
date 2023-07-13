<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
initial-scale=1.0">
    <title><?php echo e($pageTitle); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>


<body>
    
    <?php $__env->startSection('content'); ?>
            <h1 class="text-center">My Blog</h1>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora deserunt
                reprehenderit laboriosam impedit iusto fuga nesciunt, molestiae deleniti corrupti temporibus
                quaerat ipsa illum quasi consectetur enim consequatur maiores! Iure, consequuntur.</p>

        <div class="col-lg-3 col-xl-2">
        </div>
        <div class="container">

            <div class="d-flex justify-content-around">
                <div class="card" style="width: 18rem;">
                    <img class="img-thumbnail" style="height: 150px" src="<?php echo e(Vite::asset('resources/images/gb.jpg')); ?>"
                        alt="image">
                    <div class="card-body">
                        <h5 class="card-title">Sistem Informasi</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of the card's content.</p>
                        <a href="#" class="btn btn-outline-primary">Visit</a>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <img class="img-thumbnail" style="height: 150px" src="<?php echo e(Vite::asset('resources/images/gb.jpg')); ?>"
                        alt="image">
                    <div class="card-body">
                        <h5 class="card-title">Jaringan Komputer</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of the card's content.</p>
                        <a href="#" class="btn btn-outline-primary">Visit</a>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <img class="img-thumbnail" style="height: 150px" src="<?php echo e(Vite::asset('resources/images/gb.jpg')); ?>"
                        alt="image">
                    <div class="card-body">
                        <h5 class="card-title">Arsitektur Enterprise</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of the card's content.</p>
                        <a href="#" class="btn btn-outline-primary">Visit</a>
                    </div>
                </div>
            </div>
            <br>
            <div class="d-grid gap-2 d-md-block-center">
                <a href="<?php echo e(route('profile')); ?>"class="btn btn-info center-block" type="button">Go to Profile</a>
            </div>
            <br>
        </div>
    <?php $__env->stopSection(); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>

</html>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ITTS\SEMESTER 6\Pemrograman Framework\masterBarangUTS\resources\views/home.blade.php ENDPATH**/ ?>