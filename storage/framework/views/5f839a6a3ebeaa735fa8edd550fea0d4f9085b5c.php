<?php $__env->startSection( 'title', "User's board <?php echo e($board->title); ?>" ); ?>


<?php $__env->startSection( 'content' ); ?>
    <a href="<?php echo e(route('boards.index')); ?>">Retour aux boards</a>
    <br />

    <a href="<?php echo e(route('boards.edit', $board->id)); ?>">Editer le board</a>

    <h2><?php echo e($board->title); ?></h2>
    <br />

    <h3>Description du board :</h3>
    <p><?php echo e($board->description); ?></p>

    <br />

    <div class="participants">
        <h3>Participants :</h3>

        <?php $__currentLoopData = $board->users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p><?php echo e($user->name); ?></p>
            <form action="<?php echo e(route( 'boards.boarduser.destroy', $user->pivot )); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field( "DELETE" ); ?>
                <button type="submit">Supprimer</button>
            </form>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <br />

    <h3>Ajouter un participant</h3>
    <form action="<?php echo e(route( 'boards.boarduser.store', $board )); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <select name="user_id" id="user_id">
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?> : <?php echo e($user->email); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>

        <?php $__errorArgs = [ 'user_id' ];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <button type="submit">Ajouter</button>
    </form>

    <a href="<?php echo e(route( 'tasks.index', $board )); ?>">Voir les tâches</a>


<?php $__env->stopSection(); ?>

<?php echo $__env->make( 'layouts.main' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\SC\OneDrive - Ynov\YNOV B2 - 2020-2021\PHP\plannificateur_fonctionnel\resources\views/user/boards/show.blade.php ENDPATH**/ ?>