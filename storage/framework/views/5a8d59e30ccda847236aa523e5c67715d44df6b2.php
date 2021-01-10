<?php $__env->startSection('title', "User's board"); ?>


<?php $__env->startSection('content'); ?>
    <h2><?php echo e($board->title); ?></h2>
    <h3>Liste des tâches</h3>
    <?php $__currentLoopData = $board->tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><?php echo e($task->title); ?>. 
            <a href="<?php echo e(route('tasks.show', [$board, $task])); ?>">detail</a> <a href="<?php echo e(route('tasks.edit', [$board, $task])); ?>">edit</a></p>
            <form action="<?php echo e(route('boards.destroy', [$board, $task])); ?>" method='POST'>
                <?php echo method_field('DELETE'); ?>
                <?php echo csrf_field(); ?>
                
                <button type="submit">Delete</button>
            </form>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\raphm\Bureau\plannificateur_fonctionnel\resources\views/tasks/index.blade.php ENDPATH**/ ?>