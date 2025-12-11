

<?php $__env->startSection('container'); ?>

    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <article class="mt-4">
            <h2>
                <a href="/posts/<?php echo e($post['slug']); ?>">
                    <?php echo e($post['title']); ?>

                </a>
            </h2>
            <h5><b>by: <?php echo e($post['author']); ?></b></h5>
            <p><?php echo e($post['body']); ?></p>
        </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\xampp\htdocs\wayu\laravel\laravel-app\resources\views/posts.blade.php ENDPATH**/ ?>