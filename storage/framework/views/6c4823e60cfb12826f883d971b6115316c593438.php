<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
</head>
<body>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('admin.layouts.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\3D-Scway\Bulsu\resources\views/auth/layouts/main.blade.php ENDPATH**/ ?>