<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Prodotti</title>
</head>
<body>
    <h1>Prodotti</h1>

    <ul>
        <?php $__currentLoopData = $prodotti; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prodotto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($prodotto); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

</body>
</html>
<?php /**PATH /Users/michelangelo/dev/php/corso-laravel/capitolo-03/resources/views/prodotti.blade.php ENDPATH**/ ?>