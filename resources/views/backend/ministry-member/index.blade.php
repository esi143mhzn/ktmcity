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
						<li class="breadcrumb-item active">मंत्री सदस्य</li>
					</ol>
					<!-- END BREADCRUMB -->
				</div>
			</div>
		</div>

		<div class="container-fluid sm-padding-10">
			<div class="card card-default">
				<div class="card-header  separator">
					<div class="card-title card-title-nepali">मंत्री सदस्य</div>
					<div class="card-controls">
						<ul>
							<li>
								<a href="{{ route('backend.ministry-member.create') }}" class="btn btn-success btn-sm add-create-btn">मंत्री सदस्य थप गर्नुहोस्</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive m-t-30">
						<table class="table table-striped table-bordered table-datatable">
							<thead>
								<tr>
									<td>Position</td>
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
								@foreach($ministry_members as $ministry_member)
								<tr>
									<td>{{ $ministry_member->position }}</td>
									<td>{{ $ministry_member->name_nep }}</td>
									<td>{{ $ministry_member->name_eng }}</td>
									<td>{{ $ministry_member->post_nep }}</td>
									<td>{{ $ministry_member->post_eng }}</td>
									<td><img src="{{ $ministry_member->image_ministry() }}" width="100"></td>
									<td>{!! $ministry_member->status ? '<span class="badge badge-success">Enabled</span>' : '<span class="badge badge-danger">Disabled</span>' !!}
									</td>
									<td style="width: 165px;">
										<a href="{{ route('backend.ministry-member.edit', $ministry_member->id) }}" class="btn-primary btn-sm edit-link">Edit</a> 
										<form action="{{ route('backend.ministry-member.destroy', $ministry_member->id) }}" method="post" class="btn-danger btn-sm delete-form">
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