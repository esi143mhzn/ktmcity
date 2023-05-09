@extends('backend.layouts.app')
@section('content')
<div class="page-content-wrapper ">
	<div class="content sm-gutter">
		<div class="jumbotron" data-pages="parallax">
			<div class="container-fluid sm-p-l-0 sm-p-r-0">
				<div class="inner" style="transform: translateY(0px); opacity: 1;">
					<!-- START BREADCRUMB -->
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Book Ride</li>
					</ol>
					<!-- END BREADCRUMB -->
				</div>
			</div>
		</div>

		<div class="container-fluid sm-padding-10">
			<div class="card card-default">
				<div class="card-header  separator">
					<div class="card-title card-title-nepali">Book Ride</div>
					<div class="card-controls">
						<ul>
							<li>
								
							</li>
						</ul>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive m-t-30">
					<table class="table table-striped table-bordered table-datatable">
						<thead>
							<tr>
								<td>Full Name</td>
								<td>Contact</td>
								<td>Vechiles Types</td>
								<td>Destination</td>
								<td>Return Date</td>
                                <td>Checkout Date</td>
								<td>Action</td>
							</tr>
						</thead>
						<tbody>
							@foreach($bookrides as $bookride)
							<tr>
								<td>{{ $bookride->fullname }}</td>
								<td>{{ $bookride->contact }}</td>
								<td>
                                    {{ $bookride->vechiels_type == 'two_wheelers' ? 'Two Wheelers' : 'Four Wheelers' }}
                                </td>
								<td>{{ $bookride->destination }}</td>
								<td>{{ $bookride->return_date }}</td>
                                <td>{{ $bookride->checkout_date }}</td>
								<td style="width: 165px;">
									<a href="{{ route('backend.bookride.show', $bookride->id) }}" class="btn-success btn-sm edit-link">View</a> 
									<form action="{{ route('backend.bookride.destroy', $bookride->id) }}" method="post" class="btn-danger btn-sm delete-form">
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