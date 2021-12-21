

<?php $__env->startSection('title'); ?>User
<?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('breadcrumb_title'); ?>
<h3>Create Biodata</h3>
<?php $__env->endSlot(); ?>
<li class="breadcrumb-item">Tables</li>
<li class="breadcrumb-item">Bootstrap Tables</li>
<li class="breadcrumb-item active">Basic Tables</li>
<?php echo $__env->renderComponent(); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-body">
					<form class="needs-validation" novalidate="" method="POST" action="<?php echo e(route('biodata.store')); ?>">
						<?php echo csrf_field(); ?>
						<input type="hidden" name="user_id" value="<?php echo e($id); ?>">
						<div class="row g-3">
							<div class="col-md-6">
								<label class="form-label" for="validationCustom01">Street Adress</label>
								<input class="form-control" id="validationCustom01" type="text" name="street_addres" value="" required="" />
								<div class="valid-feedback">Looks good!</div>
							</div>
							<div class="col-md-6">
								<label class="form-label" for="validationCustom02">Phone Number</label>
								<input class="form-control" id="validationCustom02" type="text" name="phone_number" required="" />
								<div class="valid-feedback">Looks good!</div>
							</div>
						</div>
						<br>
						<div class="row g-3">
							<div class="col-md-6">
								<label class="form-label" for="validationCustom01">Street Adress</label>
								<input class="form-control" id="validationCustom01" type="text" name="name" value="Mark" required="" />
								<div class="valid-feedback">Looks good!</div>
							</div>
							<div class="col-md-6">
								<label class="form-label" for="validationCustom02">Last name</label>
								<input class="form-control" id="validationCustom02" type="text" value="Otto" required="" />
								<div class="valid-feedback">Looks good!</div>
							</div>
						</div>
						<br>
						<div class="row g-3">
							<div class="col-md-6">
								<label class="form-label" for="validationCustom01">Street Adress</label>
								<input class="form-control" id="validationCustom01" type="text" name="name" value="Mark" required="" />
								<div class="valid-feedback">Looks good!</div>
							</div>
							<div class="col-md-6">
								<label class="form-label" for="validationCustom02">Last name</label>
								<input class="form-control" id="validationCustom02" type="text" value="Otto" required="" />
								<div class="valid-feedback">Looks good!</div>
							</div>
						</div>
						<br>
						<div class="row g-3">
							<div class="col-md-6">
								<label class="form-label" for="validationCustom01">Street Adress</label>
								<input class="form-control" id="validationCustom01" type="text" name="name" value="Mark" required="" />
								<div class="valid-feedback">Looks good!</div>
							</div>
							<div class="col-md-6">
								<label class="form-label" for="validationCustom02">Last name</label>
								<input class="form-control" id="validationCustom02" type="text" value="Otto" required="" />
								<div class="valid-feedback">Looks good!</div>
							</div>
						</div>
						<br>
						<div class="row g-3">
							<div class="col-md-6">
								<label class="form-label" for="validationCustom01">Street Adress</label>
								<input class="form-control" id="validationCustom01" type="text" name="street_adress" value="Mark" required="" />
								<div class="valid-feedback">Looks good!</div>
							</div>
							<div class="col-md-6">
								<label class="form-label" for="validationCustom02">Phone Number</label>
								<input class="form-control" id="validationCustom02" type="text" name="phone_number" required="" />
								<div class="valid-feedback">Looks good!</div>
							</div>
						</div>
						<br>
						<div class="row g-3">
							<div class="col-md-6">
								<label class="form-label" for="validationCustom01">Street Adress</label>
								<input class="form-control" id="validationCustom01" type="text" name="name" value="Mark" required="" />
								<div class="valid-feedback">Looks good!</div>
							</div>
							<div class="col-md-6">
								<label class="form-label" for="validationCustom02">Last name</label>
								<input class="form-control" id="validationCustom02" type="text" value="Otto" required="" />
								<div class="valid-feedback">Looks good!</div>
							</div>
						</div>
						<br>
						<div class="row g-3">
							<div class="col-md-6">
								<label class="form-label" for="validationCustom03">City</label>
								<input class="form-control" id="validationCustom03" type="text" placeholder="City" required="" />
								<div class="invalid-feedback">Please provide a valid city.</div>
							</div>
							<div class="col-md-3">
								<label class="form-label" for="validationCustom04">State</label>
								<select class="form-select" id="validationCustom04" required="">
									<option selected="" disabled="" value="">Choose...</option>
									<option>...</option>
								</select>
								<div class="invalid-feedback">Please select a valid state.</div>
							</div>
							<div class="col-md-3 mb-3">
								<label class="form-label" for="validationCustom05">Zip</label>
								<input class="form-control" id="validationCustom05" type="text" placeholder="Zip" required="" />
								<div class="invalid-feedback">Please provide a valid zip.</div>
							</div>
						</div>
						<div class="mb-3">
							<div class="form-check">
								<div class="checkbox p-0">
									<input class="form-check-input" id="invalidCheck" type="checkbox" required="" />
									<label class="form-check-label" for="invalidCheck">Agree to terms and conditions</label>
								</div>
								<div class="invalid-feedback">You must agree before submitting.</div>
							</div>
						</div>
						<button class="btn btn-primary" type="submit">Submit form</button>
					</form>
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
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp_7.3.0\htdocs\sid\resources\views/biodata/create.blade.php ENDPATH**/ ?>