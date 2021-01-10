<?php $__env->startSection('title', "Task" .  $task->title); ?>


<?php $__env->startSection('content'); ?>
    <h2><?php echo e($task->title); ?></h2>
    <p><?php echo e($task->description); ?></p>
    <p>À finir avant le <?php echo e($task->due_date); ?></p>
    <p>Status :  <?php echo e($task->state); ?></p>
    <p>Categorie : <?php echo e($task->category->name); ?></p>
    <div class="participants">
        <?php $__currentLoopData = $task->assignedUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <p><?php echo e($user->name); ?> : <?php echo e($user->email); ?></p>
            <form action="<?php echo e(route('tasks.user.destroy', $user->pivot)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <button type="submit">Supprimer</button>
            </form>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\raphm\Bureau\plannificateur_fonctionnel\resources\views/tasks/show.blade.php ENDPATH**/ ?>