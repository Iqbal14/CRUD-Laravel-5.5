<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left">
      <h5>Items</h5>
    </div>
    <div class="pull-right">
      <a href="<?php echo e(route('items.index')); ?>" class="btn btn-success">Kembali</a>
    </div>
  </div>
</div>
<?php echo Form::open(['method' => 'POST','action' => 'ItemController@store']); ?>

  <div class="form-group">
    <?php echo Form::label('title', 'Title'); ?>

    <?php echo Form::text('title',null, ['class' => 'form-control', 'placeholder'=>'Enter a title..', 'required']); ?>

  </div>

    <div class="form-group">
      <?php echo Form::label('description', 'Description'); ?>

      <?php echo Form::textarea('description',null, ['class' => 'form-control', 'placeholder'=>'Enter a description..', 'required']); ?>

    </div>
    <?php echo Form::submit('Save',['class'=>'btn btn-primary']); ?>

<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>