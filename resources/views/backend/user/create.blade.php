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
						<li class="breadcrumb-item active">प्रयोगकर्ता</li>
					</ol>
					<!-- END BREADCRUMB -->
				</div>
			</div>
		</div>

		<div class="container-fluid sm-padding-10">
			<div class="card card-default">
				<div class="card-header  separator">
					<div class="card-title card-title-nepali">प्रयोगकर्ता</div>
					<div class="card-controls">
					</div>
				</div>
				<div class="card-body m-t-10">
					<form action="{{ route('backend.user.store') }}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<div class="col-md-6">
								<div class="form-group form-group-default">
									<label>Name</label>
									<input type="text" name="name" value="{{ isset($users) ? $users->name : '' }}" placeholder="Enter Name" class="form-control" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group form-group-default">
									<label>Email</label>
									<input type="email" name="email" value="{{ isset($users) ? $users->email : '' }}" placeholder="Enter Email" class="form-control" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group form-group-default">
									<label>New Password</label>
									<input type="password" name="password" placeholder="Minimum of 6 Charactors" class="form-control" required autocomplete="new-password">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group form-group-default">
									<label>Retype Password</label>
									<input type="password" name="repassword" placeholder="Minimum of 6 Charactors" class="form-control" required autocomplete="new-password">
								</div>
							</div>
						</div>
						<button class="btn btn-primary btn-cons m-t-10" type="submit">Create a new account</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection