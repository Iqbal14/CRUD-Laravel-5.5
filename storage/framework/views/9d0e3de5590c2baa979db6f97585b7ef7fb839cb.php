<?php $__env->startSection('content'); ?>
  <br><br>
  <div class="row">
      <div class="form-group">
        <strong>Title:</strong> <?php echo e($item -> title); ?>

      </div>

      <div class="form-group">
        <strong>Description:</strong> <?php echo e($item -> description); ?>

      </div>
      <div class="form-group">
        <strong>Created at</strong> <?php echo e($item -> created_at ->diffForhumans()); ?>

      </div>
      <div class="form-group">
        <strong>Update ad</strong> <?php echo e($item -> updated_at ->diffForhumans()); ?>

      </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>