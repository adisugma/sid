@extends('layouts.admin.master')

@section('title')User
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Create Biodata</h3>
		@endslot
		<li class="breadcrumb-item">Tables</li>
		<li class="breadcrumb-item">Bootstrap Tables</li>
		<li class="breadcrumb-item active">Basic Tables</li>
	@endcomponent
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-body">
						<form class="needs-validation" novalidate="" method="POST" action="{{route('biodata.store')}}">
							@csrf
							<input type="hidden" name="user_id" value="{{$id}}">
							<div class="row g-3">
								<div class="col-md-4">
									<label class="form-label" for="validationCustom01">First name</label>
									<input class="form-control" id="validationCustom01" type="text" name="name" value="Mark" required="" />
									<div class="valid-feedback">Looks good!</div>
								</div>
								<div class="col-md-4">
									<label class="form-label" for="validationCustom02">Last name</label>
									<input class="form-control" id="validationCustom02" type="text" value="Otto" required="" />
									<div class="valid-feedback">Looks good!</div>
								</div>
								<div class="col-md-4 mb-3">
									<label class="form-label" for="validationCustomUsername">Username</label>
									<div class="input-group">
										<span class="input-group-text" id="inputGroupPrepend">@</span>
										<input class="form-control" id="validationCustomUsername" type="text" placeholder="Username" aria-describedby="inputGroupPrepend" required="" />
										<div class="invalid-feedback">Please choose a username.</div>
									</div>
								</div>
							</div>
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
	
	
	@push('scripts')
	<script src="{{asset('assets/js/bootstrap/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>
	@endpush

@endsection