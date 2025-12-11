

<?php $__env->startSection('container'); ?>
    <h1>Selamat Datang Di Halaman <?php echo e($title); ?></h1>
    <h4>nama Saya <?php echo e($nama); ?></h4>
    <h4>Email Saya <b><?php echo e($email); ?></b></h4>
    <img src="img/<?php echo e($image); ?>" alt="<?php echo e($nama); ?>" width="200px">    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\xampp\htdocs\wayu\laravel\laravel-app\resources\views/about.blade.php ENDPATH**/ ?>