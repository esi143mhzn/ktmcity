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
					<table class="table table-striped table-bordered m-t-30">
						<thead>
							<tr>
								<td>Full Name</td>
								<td>{{ $bookrides->fullname }}</td>
							</tr>
							<tr>
								<td>Contact</td>
								<td>{{ $bookrides->contact }}</td>
							</tr>
							<tr>
								<td>Vechiles Type</td>
								<td>{{ $bookrides->vechiels_type =='two_wheelers' ? 'Two Wheelers' : 'Four Wheelers' }}</td>
							</tr>
							<tr>
								<td>Destination</td>
								<td>{{ $bookrides->destination }}</td>
							</tr>
							<tr>
								<td>Return Date</td>
								<td>{{ $bookrides->return_date }}</td>
							</tr>
                            <tr>
                                <td>Checkout Date</td>
                                <td>{{ $bookrides->checkout_date }}</td>
                            </tr>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection