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
						<li class="breadcrumb-item active">विवरण</li>
					</ol>
					<!-- END BREADCRUMB -->
				</div>
			</div>
		</div>

		<div class="container-fluid sm-padding-10">
			<div class="card card-default">
				<div class="card-header  separator">
					<div class="card-title card-title-nepali">विवरण</div>
				</div>
				<div class="card-body">
					<table class="table table-striped table-bordered m-t-30">
						<thead>
							<tr>
								<td>ID</td>
								<td>Municipality</td>
								<td>Image</td>
								<td>Action</td>
							</tr>
						</thead>
						<tbody>
							@foreach($our_reaches as $our_reach)
							<tr>
								<td>{{ $our_reach->id }}</td>
								<td>{{ $our_reach->municipalityName->title }}</td>
								<td><img src="{{ $our_reach->municipaltyImage() }}" width="100"></td>
								<td style="width: 165px;">
									<a href="{{ route('backend.our-reach.edit', $our_reach->id) }}" class="btn-primary btn-sm edit-link">Edit</a> 
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				{{ $our_reaches->links() }}
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