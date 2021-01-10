<?php $__env->startSection( 'title', "User's board" ); ?>


<?php $__env->startSection( 'content' ); ?>
    <a href="<?php echo e(route( 'dashboard' )); ?>">Retour</a>
    <h2>Tous vos boards</h2>
    <br />

    <a href="<?php echo e(route( 'boards.create' )); ?>">Créer une Board</a>
    <br /><br />

    <?php $__currentLoopData = $boards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $board): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(route( 'boards.show', $board )); ?>"><h3><?php echo e($board->title); ?></h3></a>

            <form action="<?php echo e(route( 'boards.destroy', $board->id )); ?>" method='POST'>
                <?php echo method_field( 'DELETE' ); ?>
                <?php echo csrf_field(); ?>

                <button type="submit">Supprimer la board</button>
            </form>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make( 'layouts.main' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\SC\OneDrive - Ynov\YNOV B2 - 2020-2021\PHP\plannificateur_fonctionnel\resources\views/user/boards/index.blade.php ENDPATH**/ ?>