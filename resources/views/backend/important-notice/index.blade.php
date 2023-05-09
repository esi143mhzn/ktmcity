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
						<li class="breadcrumb-item active">महत्वपूर्ण सूचना</li>
					</ol>
					<!-- END BREADCRUMB -->
				</div>
			</div>
		</div>

		<div class="container-fluid sm-padding-10">
			<div class="card card-default">
				<div class="card-header  separator">
					<div class="card-title card-title-nepali">महत्वपूर्ण सूचना</div>
					<div class="card-controls">
						<ul>
							<li>
								<a href="{{ route('backend.important-notice.create') }}" class="btn btn-success btn-sm add-create-btn">महत्वपूर्ण सूचना थप गर्नुहोस्</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="card-body">
					<table class="table table-striped table-bordered m-t-30">
						<thead>
							<tr>
								<td style="width: 40%;">Title</td>
								<td>Type</td>
								<td>Link/PDF</td>
								<td>Status</td>
								<td>Action</td>
							</tr>
						</thead>
						<tbody>
							@foreach($important_notice as $importantnotice)
							<tr>
								<td>{{ str_limit($importantnotice->title_nep, 100, '...') }}</td>
								<td>{{ $importantnotice->link_pdf == 'link' ?: 'File/PDF'}}</td>
								<td>{{ ($importantnotice->link_pdf == 'link') ? $importantnotice->link : $importantnotice->pdf }}</td>
								<td>{!! $importantnotice->status ? '<span class="badge badge-success">Enabled</span>' : '<span class="badge badge-danger">Disabled</span>' !!}</td>
								<td>
									<a href="{{ route('backend.important-notice.edit', $importantnotice->id) }}" class="edit-link">Edit &middot;</a> 
									<form action="{{ route('backend.important-notice.destroy', $importantnotice->id) }}" method="post" class="delete-form">
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