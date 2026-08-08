<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Chi Siamo</title>
</head>
<body>
    <h1>Profilo di <?php echo e($sviluppatore); ?></h1>

    <h2>Le mie competenze:</h2>
    <ul>
        <?php $__currentLoopData = $competenze; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($item); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    
    <?php if(count($competenze) > 3): ?>
        <p><strong>Status:</strong> Sviluppatore con molte competenze!</p>
    <?php endif; ?>
</body>
</html>
<?php /**PATH /Users/michelangelo/dev/php/corso-laravel/capitolo-03/resources/views/chi-siamo.blade.php ENDPATH**/ ?>