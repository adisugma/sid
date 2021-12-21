<?php $__env->startSection('title'); ?>Basic Tables
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Bootstrap Basic Tables</h3>
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
									<th scope="col">First Name</th>
									<th scope="col">Last Name</th>
									<th scope="col">Username</th>
									<th scope="col">Role</th>
									<th scope="col">Country</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Alexander</td>
									<td>Orton</td>
									<td>@mdorton</td>
									<td>Admin</td>
									<td>USA</td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>John Deo</td>
									<td>Deo</td>
									<td>@johndeo</td>
									<td>User</td>
									<td>USA</td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Randy Orton</td>
									<td>the Bird</td>
									<td>@twitter</td>
									<td>admin</td>
									<td>UK</td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Randy Mark</td>
									<td>Ottandy</td>
									<td>@mdothe</td>
									<td>user</td>
									<td>AUS</td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>Ram Jacob</td>
									<td>Thornton</td>
									<td>@twitter</td>
									<td>admin</td>
									<td>IND</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<?php $__env->startPush('scripts'); ?>
	<script src="<?php echo e(asset('assets/js/bootstrap/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap/bootstrap.min.js')); ?>"></script>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\theme\resources\views/home.blade.php ENDPATH**/ ?>