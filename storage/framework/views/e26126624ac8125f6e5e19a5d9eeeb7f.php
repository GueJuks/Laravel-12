<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark  bg-danger">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Komik Marvel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php echo e(($title === 'Home') ? 'active' : ''); ?>" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(($title === 'About') ? 'active' : ''); ?>" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(($title === 'Posts') ? 'active' : ''); ?>" href="/blog">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(($title === 'Komik') ? 'active' : ''); ?>" href="/komiks">Komik</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
</div><?php /**PATH D:\xampp\htdocs\wayu\laravel\laravel-app\resources\views/partials/navbar.blade.php ENDPATH**/ ?>