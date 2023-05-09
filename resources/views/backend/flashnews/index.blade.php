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
						<li class="breadcrumb-item active">फ्ल्यास न्युज</li>
					</ol>
					<!-- END BREADCRUMB -->
				</div>
			</div>
		</div>

		<div class="container-fluid sm-padding-10">
			<div class="card card-default">
				<div class="card-header  separator">
					<div class="card-title card-title-nepali">फ्ल्यास न्युज</div>
					<div class="card-controls">
						<ul>
							<li>
								<a href="{{ route('backend.flash-news.create') }}" class="btn btn-success btn-sm add-create-btn">फ्ल्यास न्युज थप गर्नुहोस्</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="card-body">
					<table class="table table-striped table-bordered m-t-30">
						<thead>
							<tr>
								<td>Title</td>
								<td>Type</td>
								<td>Link/PDF</td>
								<td>Status</td>
								<td>Action</td>
							</tr>
						</thead>
						<tbody>
							@foreach($flashnews as $flash_news)
							<tr>
								<td>{{ str_limit($flash_news->title_nep, 50, '...') }}</td>
								<td>{{ $flash_news->link_pdf == 'link' ?: 'File/PDF' }}</td>
								<td>{{ ($flash_news->link_pdf == 'link') ? $flash_news->link : $flash_news->pdf }}</td>
								<td>{!! $flash_news->status ? '<span class="badge badge-success">Enabled</span>' : '<span class="badge badge-danger">Disabled</span>' !!}</td>
								<td style="width: 165px;">
									<a href="{{ route('backend.flash-news.edit', $flash_news->id) }}" class="btn-primary btn-sm edit-link">Edit</a> 
									<form action="{{ route('backend.flash-news.destroy', $flash_news->id) }}" method="post" class="btn-danger btn-sm delete-form">
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