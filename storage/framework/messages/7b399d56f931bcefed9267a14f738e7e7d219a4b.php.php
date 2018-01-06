<?php $__env->startSection('content'); ?>
    <div class="page-content">
        <?php echo $__env->make('voyager::alerts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('voyager::dimmers', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('voyager::master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>