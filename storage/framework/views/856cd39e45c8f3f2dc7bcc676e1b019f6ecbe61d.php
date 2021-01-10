<?php $__env->startSection('title', "User's board"); ?>


<?php $__env->startSection('content'); ?>
    <p>Il faut parcourir et afficher tous le boards. </p>
    <?php $__currentLoopData = $boards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $board): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p>This is board <?php echo e($board->title); ?>. 
            <a href="<?php echo e(route('boards.show', $board)); ?>">detail</a></p>
            <form action="<?php echo e(route('boards.destroy', $board->id)); ?>" method='POST'>
                <?php echo method_field('DELETE'); ?>
                <?php echo csrf_field(); ?>
                
                <button type="submit">Delete</button>
            </form>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\raphm\Bureau\plannificateur_fonctionnel\resources\views/user/boards/index.blade.php ENDPATH**/ ?>