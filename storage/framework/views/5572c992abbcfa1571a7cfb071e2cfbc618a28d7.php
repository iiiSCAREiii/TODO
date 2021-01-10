<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>Todo - <?php echo $__env->yieldContent('title'); ?></title>
        <style> 
            .is-invalid {border: 1px solid red;}
            .alert {color:red;}



        </style>
    </head>
    <body>
        <?php $__env->startSection('sidebar'); ?>
            
        <?php echo $__env->yieldSection(); ?>

        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </body>
</html><?php /**PATH C:\Users\raphm\Bureau\plannificateur_fonctionnel\resources\views/layouts/main.blade.php ENDPATH**/ ?>