<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Penggajian</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                        
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                       <ul class="nav nav-tabs">
                      
                        <!-- Authentication Links -->
                        <hr>
                        <?php if(Auth::guest()): ?>
                            <li role="presentation" class="active"><a href="<?php echo e(url('/login')); ?>">Login</a></li>
                        <?php else: ?>
                        <li role="presentation" class="<?php echo $__env->yieldContent('golongan'); ?>" ><a href="<?php echo e(url('/golongan')); ?>">Golongan</a></li>
                        <li role="presentation" class="<?php echo $__env->yieldContent('jabatan'); ?>"><a href="<?php echo e(url('/jabatan')); ?>">Jabatan</a></li>
                        <li role="presentation" class="<?php echo $__env->yieldContent('pegawai'); ?>"><a href="<?php echo e(url('/pegawai')); ?>">Pegawai</a></li>
                        <li role="presentation" class="<?php echo $__env->yieldContent('kategori'); ?>"><a href="<?php echo e(url('/kategori_lembur')); ?>">Kategori Lembur</a></li>
                        <li role="presentation" class="<?php echo $__env->yieldContent('lemburp'); ?>"><a href="<?php echo e(url('/lembur_pegawai')); ?>">Lembur Pegawai</a></li>
                        <li role="presentation" class="<?php echo $__env->yieldContent('tunjangan'); ?>"><a href="<?php echo e(url('/tunjangan')); ?>">Tunjangan</a></li>
                        <li role="presentation" class="<?php echo $__env->yieldContent('tunjanganp'); ?>"><a href="<?php echo e(url('/tunjangan_pegawai')); ?>">Tunjangan Pegawai</a></li>
                        <li role="presentation" class="<?php echo $__env->yieldContent('penggajian'); ?>"><a href="<?php echo e(url('/penggajian')); ?>">Penggajian</a></li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="<?php echo e(url('/logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    </ul>
                    </ul>
                </div>
            </div>
        </nav>

        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
