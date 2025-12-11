

<?php $__env->startSection('container'); ?>
    <article class="mt-4">
        <h2>Judul <?php echo e($post['title']); ?></h2>
        <h5>Penulis by <?php echo e($post['author']); ?></h5>
        <p><?php echo e($post['body']); ?></p>
    </article>

    <a href="/blog">Kembali ke Blog</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\xampp\htdocs\wayu\laravel\laravel-app\resources\views/post.blade.php ENDPATH**/ ?>