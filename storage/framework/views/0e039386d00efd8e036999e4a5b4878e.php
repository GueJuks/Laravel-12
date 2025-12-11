


<?php $__env->startSection('container'); ?>
    <?php $__currentLoopData = $komiks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $komik): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <article class="mt-4">
        <h3>Judul Komik Marvel 
            <a href="/komik/<?php echo e($komik['slug_komik']); ?>"><?php echo e($komik['title_komik']); ?></a>
        </h3>
        <h5>Penulis Komik Marvel <b><?php echo e($komik['penulis_komik']); ?></b></h5>
        <h6>Penerbit Komik Marvel <b><?php echo e($komik['penerbit_komik']); ?></b></h6>
        <p><?php echo e($komik['body_komik']); ?></p>
    </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\xampp\htdocs\wayu\laravel\laravel-app\resources\views/komiks.blade.php ENDPATH**/ ?>