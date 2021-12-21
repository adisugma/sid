@extends('layouts.admin.master')

@section('title')User
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>List User</h3>
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
									<th scope="col">Name</th>
									<th scope="col">Email</th>
									<th scope="col">Role</th>
									<th scope="col">biodata name</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							@foreach ($result as $key => $user)
							<tbody>
								<tr>
									<td>{{++$key}}</td>
									<td>{{$user->name}}</td>
									<td>{{$user->email}}</td>
									<td>{{$user->role}}</td>
									<td>{{$user->biodata->name}}</td>
									<td><a href="{{route('biodata.create',$user->id,['id'=>$user->id])}}">fill biodata</a></td>
								</tr>
							</tbody>
							@endforeach
							
						</table>
					</div>
				</div>
				{{ $result->links() }}
			</div>
		</div>
	</div>
	
	
	@push('scripts')
	<script src="{{asset('assets/js/bootstrap/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>
	@endpush

@endsection