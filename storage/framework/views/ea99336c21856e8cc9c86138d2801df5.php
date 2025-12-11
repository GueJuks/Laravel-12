


<?php $__env->startSection('container'); ?>
    <article>
        <h3>Judul <?php echo e($komik['title_komik']); ?></h3>
        <h5>Penulis Komik Marvel <b><?php echo e($komik['penulis_komik']); ?></b></h5>
        <h6>Penerbit Komik Marvel <b><?php echo e($komik['penerbit_komik']); ?></b></h6>
        <p><?php echo e($komik['body_komik']); ?></p>
    </article>
    <a href="/komiks">Kembali Ke Halaman Komik</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\xampp\htdocs\wayu\laravel\laravel-app\resources\views/komik.blade.php ENDPATH**/ ?>