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
						<li class="breadcrumb-item active">सूचना / प्रेस बिज्ञप्ति</li>
					</ol>
					<!-- END BREADCRUMB -->
				</div>
			</div>
		</div>

		<div class="container-fluid sm-padding-10">
			<div class="card card-default">
				<div class="card-header  separator">
					<div class="card-title card-title-nepali">सूचना / प्रेस बिज्ञप्ति</div>
					<div class="card-controls">
						<ul>
							<li>
								<a href="{{ route('backend.notice.create') }}" class="btn btn-success btn-sm add-create-btn">सूचना / प्रेस बिज्ञप्ति थप गर्नुहोस्</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive m-t-30">
					<table class="table table-striped table-bordered table-datatable">
						<thead>
							<tr>
								<td>Title</td>
								<td>Type</td>
								<td>Link/PDF</td>
								<td>Notice/Press Release</td>
								<td>Status</td>
								<td>Date</td>
								<td>Action</td>
							</tr>
						</thead>
						<tbody>
							@foreach($notices as $notice)
							<tr>
								<td>{{ str_limit($notice->title_nep, 50, '...') }}</td>
								<td>{{ $notice->link_pdf == 'link' ?: 'File/PDF' }}</td>
								<td>{{ $notice->link_pdf == 'link' ? $notice->link : $notice->pdf }}</td>
								<td>{!! $notice->notice_press_release == 'notice' ? '<span class="badge badge-default">Notice</span>' : '<span class="badge badge-default">Press Release</span>' !!}</td>
								<td>{!! $notice->status ? '<span class="badge badge-success">Enabled</span>' : '<span class="badge badge-danger">Disabled</span>' !!}</td>
								<td>{{ $notice->nep_to_eng_numbers($notice->date_np) }}</td>
								<td style="width: 165px;">
									<a href="{{ route('backend.notice.edit', $notice->id) }}" class="btn-primary btn-sm edit-link">Edit</a> 
									<form action="{{ route('backend.notice.destroy', $notice->id) }}" method="post" class="btn-danger btn-sm delete-form">
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