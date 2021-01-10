<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TODO APP</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>

    <body class="antialiased">

        <div>
            <h1>Welcome on TODO APP</h1>
        </div>
        <div class="">
            <?php if(Route::has('login')): ?>
                <div class="">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/dashboard')); ?>" class="">Dashboard</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>" class="">Login</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>" class="">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </body>
</html>
<?php /**PATH C:\Users\SC\OneDrive - Ynov\YNOV B2 - 2020-2021\PHP\plannificateur_fonctionnel\resources\views/welcome.blade.php ENDPATH**/ ?>