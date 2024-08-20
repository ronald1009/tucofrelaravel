<html>
    <head>
        <title> TU COFRE <?php echo $__env->yieldContent('title'); ?></title>
        <?php echo app('Illuminate\Foundation\Vite')(["resources/sass/app.scss", "resources/js/app.js"]); ?>

    </head>
    <body>







        <div class="container">
            <nav class="navbar navbar-expand-lg bg-body-primary">
                <div class="container-fluid">

                    <img src="<?php echo e(asset('imagenes/cofre1.png')); ?>" width="50" height="50"/>

                  <a class="navbar-brand" href="#">   TU COFRE</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Dropdown
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">CREAR TRANSACCION </a></li>

                        </ul>
                      </li>

                    </ul>
                    <form class="d-flex" role="search">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                  </div>
                </div>
              </nav>


            <?php echo $__env->yieldContent('content'); ?>
        </div>


    </body>
</html>
<?php /**PATH C:\proyectolaravel\tucofre-app\resources\views/layouts/app.blade.php ENDPATH**/ ?>