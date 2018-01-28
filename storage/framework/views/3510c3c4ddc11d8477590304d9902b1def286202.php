<?php $__env->startSection('content'); ?>
<br><br>
<div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left">
      <h5>Items</h5>
    </div>
    <div class="pull-right">
      <a href="<?php echo e(route('items.create')); ?>" class="btn btn-success">Buat Data Baru</a>
    </div>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Created at</th>
      <th scope="col">Updated at</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="col"><?php echo e($item->id); ?></th>
      <th scope="col"> <?php echo e($item->title); ?></th>
      <th scope="col"> <?php echo e($item->description); ?></th>
      <th scope="col"> <?php echo e($item->created_at); ?></th>
      <th scope="col"> <?php echo e($item->updated_at); ?></th>

      <th>
        <td>
            <a href="<?php echo e(route('items.show', $item->id)); ?>" class="btn btn-info">Tampilkan</a>
            <a href="<?php echo e(route('items.edit', $item->id)); ?>" class="btn btn-primary">Edit</a>
            <?php echo Form::open(['method'=>'DELETE', 'action'=>['ItemController@destroy', $item->id] , 'style' => 'display:inline']); ?>

              <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

            <?php echo Form::close(); ?>


        </td>
      </th>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>