@extends('backend.layouts.app')
@section('content')
<div class="page-content-wrapper ">
	<div class="content sm-gutter">
		<div class="jumbotron" data-pages="parallax">
			<div class="container-fluid sm-p-l-0 sm-p-r-0">
				<div class="inner">
					<!-- START BREADCRUMB -->
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Hotel</li>
					</ol>
					<!-- END BREADCRUMB -->
				</div>
			</div>
		</div>

		<div class="container-fluid sm-padding-10">
			<div class="card card-default">
				<div class="card-header  separator">
					<div class="card-title card-title-nepali">hotel</div>
					<div class="card-controls">
						<ul>
							<li>
								<a href="{{ route('backend.hotel.create') }}" class="btn btn-success btn-sm add-create-btn">Add hotel</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="card-body">
					<table class="table table-striped table-bordered m-t-30">
						<thead>
							<tr>
								<td>Image</td>
                                <td>Title</td>
								<td>Open Time</td>
								<td>Location</td>
								<td>Status</td>
								<td>Action</td>
							</tr>
						</thead>
						<tbody>
							@foreach($hotels as $hotel)
							<tr>
								<td><img src="{{ $hotel->hotel_image() }}" width="100"></td>
                                <td>{{ $hotel->title }}</td>
								<td>{{ $hotel->open_time }}</td>
								<td>{{ $hotel->location }}</td>
								<td>{!! $hotel->status ? '<span class="badge badge-success">Enabled</span>' : '<span class="badge badge-danger">Disabled</span>' !!}</td>
								<td style="width: 165px;">
									<a href="{{ route('backend.hotel.edit', $hotel->id) }}" class="btn-primary btn-sm edit-link">Edit</a> 
									<form action="{{ route('backend.hotel.destroy', $hotel->id) }}" method="post" class="btn-danger btn-sm delete-form">
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