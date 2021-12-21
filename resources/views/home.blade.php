@extends('layouts.admin.master')

@section('title')Basic Tables
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Bootstrap Basic Tables</h3>
		@endslot
		<li class="breadcrumb-item">Tables</li>
		<li class="breadcrumb-item">Bootstrap Tables</li>
		<li class="breadcrumb-item active">Basic Tables</li>
	@endcomponent
	
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
	
	
	@push('scripts')
	<script src="{{asset('assets/js/bootstrap/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>
	@endpush

@endsection