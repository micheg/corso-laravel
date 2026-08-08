<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>posts</title>
</head>
<body>
    <ul>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <h1><?php echo e($post->titolo); ?></h1>
                <span><?php echo e($post->pubblicato); ?></span>
                <div><?php echo e($post->contenuto); ?></div>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

</body>
</html>
<?php /**PATH /Users/michelangelo/dev/php/corso-laravel/capitolo-04/resources/views/blog.blade.php ENDPATH**/ ?>