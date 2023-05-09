@extends('backend.layouts.app')
@section('content')
<div class="page-content-wrapper ">
	<div class="content sm-gutter">
		<div class="jumbotron" data-pages="parallax">
			<div class="container-fluid sm-p-l-0 sm-p-r-0">
				<div class="inner">
					<!-- START BREADCRUMB -->
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">गृहपृष्ठ</a></li>
						<li class="breadcrumb-item active">प्रयोगकर्ता</li>
					</ol>
					<!-- END BREADCRUMB -->
				</div>
			</div>
		</div>

		<div class="container-fluid sm-padding-10">
			<div class="card card-default">
				<div class="card-header  separator">
					<div class="card-title card-title-nepali">प्रयोगकर्ता</div>
					<div class="card-controls">
						<ul>
							<li>
								<a href="{{ route('backend.user.create') }}" class="btn btn-success btn-sm add-create-btn">प्रयोगकर्ता थप गर्नुहोस्</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive m-t-30">
					<table class="table table-striped table-bordered table-datatable">
						<thead>
							<tr>
								<td>Name</td>
								<td>Email</td>
								<td>Role</td>
								<td>Action</td>
							</tr>
						</thead>
						<tbody>
							@foreach($users as $user)
							<tr>
								<td>{{ $user->name }}</td>
								<td>{{ $user->email }}</td>
								<td>{{ $user->role ? 'Admin' : 'User' }}</td>
								<td>
									<a href="{{ route('backend.user.edit', $user->id) }}" class="edit-link">Edit &middot;</a> 
									<form action="{{ route('backend.user.destroy', $user->id) }}" method="post" class="delete-form">
										@csrf
										@method('DELETE')
										<button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
									</form>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css"/>
@endpush


@push('scripts')
<script src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
<script>
	$('.table-datatable').dataTable({
		"aaSorting": []
	});
</script>
@endpush

