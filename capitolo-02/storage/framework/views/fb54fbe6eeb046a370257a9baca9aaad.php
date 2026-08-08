<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Chi siamo</title>
</head>
<body>
    <ul>
        <?php $__currentLoopData = $competenze; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>Key: <?php echo e($key); ?>/Value: <?php echo e($value); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</body>
</html>
<?php /**PATH /Users/michelangelo/dev/php/corso-laravel/capitolo-02/resources/views/chi-siamo.blade.php ENDPATH**/ ?>