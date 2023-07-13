<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>Master Data Lab</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>

<body>
    <div class="container text-center my-5">
        <h1 class="fw-bold mb-4">MASTER DATA OF COMPUTER LAB</h1>
        <div class="container m-5">
            <img class="img-thumbnail" src="<?php echo e(Vite::asset('resources/images/Master.png')); ?>" alt="image" style="weight: 600px; height: 350px">
            <div class="col-md-2 offset-md-5 mt-4">
                <div class="d-grid gap-2">
                    <a class="btn btn-info" href="<?php echo e(route('home')); ?>">Go To App</a>
                </div>
            </div>
        </div>
        <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>

</html
<?php /**PATH D:\ITTS\SEMESTER 6\Pemrograman Framework\masterBarangUTS\resources\views/welcome.blade.php ENDPATH**/ ?>