<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('fontawesome-free-6.4.0-web/css/all.min.css')); ?>">
</head>
<body>
<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    
    <?php echo $__env->make('admin.layouts.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\3D-SC\resources\views/auth/layouts/main.blade.php ENDPATH**/ ?>