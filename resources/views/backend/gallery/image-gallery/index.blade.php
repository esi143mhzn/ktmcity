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
						<li class="breadcrumb-item active">तस्वीर संग्रह</li>
					</ol>
					<!-- END BREADCRUMB -->
				</div>
			</div>
		</div>

		<div class="container-fluid sm-padding-10">
			<div class="card card-default">
				<div class="card-header  separator">
					<div class="card-title card-title-nepali">तस्वीर संग्रह</div>
					<div class="card-controls">
						<ul>
							<li>
								<a href="{{ route('backend.image-gallery.create') }}" class="btn btn-success btn-sm add-create-btn">तस्वीर संग्रह थप गर्नुहोस्</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive m-t-30">
					<table class="table table-striped table-bordered table-datatable">
						<thead>
							<tr>
								<td>Album Cover</td>
								<td>Album Title</td>
								<td>Status</td>
								<td>Action</td>
							</tr>
						</thead>
						<tbody>
							@foreach($image_galleries as $image_gallery)
							<tr>
								<td><img src="{{ $image_gallery->image_gallery() }}" width="100"></td>
								<td>{{ $image_gallery->title }}</td>
								<td>{!! $image_gallery->status ? '<span class="badge badge-success">Enabled</span>' : '<span class="badge badge-danger">Disabled</span>' !!}
								</td>
								<td style="width: 165px;">
									<a href="{{ route('backend.image-gallery.show', $image_gallery->id) }}" class="btn-success btn-sm edit-link">View</a> 
									<a href="{{ route('backend.image-gallery.edit', $image_gallery->id) }}" class="btn-primary btn-sm edit-link" style="margin-left: 5px">Edit</a> 
									<form action="{{ route('backend.image-gallery.destroy', $image_gallery->id) }}" method="post" class="delete-form">
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