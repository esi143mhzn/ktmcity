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
						<li class="breadcrumb-item active">ऐन तथा नियमावली</li>
					</ol>
					<!-- END BREADCRUMB -->
				</div>
			</div>
		</div>

		<div class="container-fluid sm-padding-10">
			<div class="card card-default">
				<div class="card-header  separator">
					<div class="card-title card-title-nepali">ऐन तथा नियमावली</div>
					<div class="card-controls">
						<ul>
							<li>
								<a href="{{ route('backend.act-regulation.create') }}" class="btn btn-success btn-sm add-create-btn">ऐन तथा नियमावली थप गर्नुहोस्</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive m-t-30">
					<table class="table table-striped table-bordered table-datatable">
						<thead>
							<tr>
								<td>Title Nepali</td>
								<td>Title English</td>
								<td>File/PDF</td>
								<td>Status</td>
								<td>Action</td>
							</tr>
						</thead>
						<tbody>
							@foreach($act_regulations as $act_regulation)
							<tr>
								<td>{{ str_limit($act_regulation->title_nep, 100, '...') }}</td>
								<td>{{ str_limit($act_regulation->title_eng, 100, '...') }}</td>
								<td><a href="{{ $act_regulation->pdf }}" target="_blank">{{ $act_regulation->pdf }}</a></td>
									<td>{!! $act_regulation->status ? '<span class="badge badge-success">Enabled</span>' : '<span class="badge badge-danger">Disabled</span>' !!}
									</td>
								<td style="width: 165px;">
									<a href="{{ route('backend.act-regulation.edit', $act_regulation->id) }}" class="btn-primary btn-sm edit-link">Edit</a> 
									<form action="{{ route('backend.act-regulation.destroy', $act_regulation->id) }}" method="post" class="btn-danger btn-sm delete-form">
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