@extends('backend.layouts.app')
@section('content')
<div class="page-content-wrapper ">
	<div class="content sm-gutter">
		<div class="jumbotron" data-pages="parallax">
			<div class="container-fluid sm-p-l-0 sm-p-r-0">
				<div class="inner" style="transform: translateY(0px); opacity: 1;">
					<!-- START BREADCRUMB -->
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">गृहपृष्ठ</a></li>
						<li class="breadcrumb-item active">कर्मचारी विवरण</li>
					</ol>
					<!-- END BREADCRUMB -->
				</div>
			</div>
		</div>

		<div class="container-fluid sm-padding-10">
			<div class="card card-default">
				<div class="card-header  separator">
					<div class="card-title card-title-nepali">कर्मचारी विवरण</div>
					<div class="card-controls">
						<ul>
							<li>
								<a href="{{ route('backend.team-member.create') }}" class="btn btn-success btn-sm add-create-btn">कर्मचारी विवरण थप गर्नुहोस्</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="card-body">
					<table class="table table-striped table-bordered m-t-30">
						<thead>
							<tr>
								<td>Name Nepali</td>
								<td>Name English</td>
								<td>Post Nepali</td>
								<td>Post English</td>
								<td>Image</td>
								<td>Status</td>
								<td>Action</td>
							</tr>
						</thead>
						<tbody>
							@foreach($team_members as $team_member)
							<tr>
								<td>{{ $team_member->name_nep }}</td>
								<td>{{ $team_member->name_eng }}</td>
								<td>{{ $team_member->post_nep }}</td>
								<td>{{ $team_member->post_eng }}</td>
								<td><img src="{{ $team_member->image_team_members() }}" width="100"></td>
								<td>{!! $team_member->status ? '<span class="badge badge-success">Enabled</span>' : '<span class="badge badge-danger">Disabled</span>' !!}</td>
								<td style="width: 165px;">
									<a href="{{ route('backend.team-member.edit', $team_member->id) }}" class="btn-primary btn-sm edit-link">Edit</a> 
									<form action="{{ route('backend.team-member.destroy', $team_member->id) }}" method="post" class="btn-danger btn-sm delete-form">
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