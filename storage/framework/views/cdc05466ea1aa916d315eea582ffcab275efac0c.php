<?php $__env->startSection('title'); ?>User
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>List User</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Tables</li>
		<li class="breadcrumb-item">Bootstrap Tables</li>
		<li class="breadcrumb-item active">Basic Tables</li>
	<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Basic Table</h5>
						<span>Use a class<code>table</code> to any table.</span>
					</div>
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Name</th>
									<th scope="col">Email</th>
									<th scope="col">Role</th>
									<th scope="col">biodata name</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tbody>
								<tr>
									<td><?php echo e(++$key); ?></td>
									<td><?php echo e($user->name); ?></td>
									<td><?php echo e($user->email); ?></td>
									<td><?php echo e($user->role); ?></td>
									<td><?php echo e($user->biodata->name); ?></td>
									<td><a href="<?php echo e(route('biodata.create',$user->id,['id'=>$user->id])); ?>">fill biodata</a></td>
								</tr>
							</tbody>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							
						</table>
					</div>
				</div>
				<?php echo e($result->links()); ?>

			</div>
		</div>
	</div>
	
	
	<?php $__env->startPush('scripts'); ?>
	<script src="<?php echo e(asset('assets/js/bootstrap/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap/bootstrap.min.js')); ?>"></script>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\theme\resources\views/user/index.blade.php ENDPATH**/ ?>