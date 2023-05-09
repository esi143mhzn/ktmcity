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
					<div class="card-controls">
					</div>
				</div>
				<div class="card-body m-t-10">
					<form action="{{ route('backend.our-reach.update', $our_reaches->id) }}" method="post" enctype="multipart/form-data">
						@csrf
						@method('PATCH')
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>{{ $our_reaches->municipalityName->title }}</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Image</label>
							<div>	
								<div class="fileinput fileinput-new" data-provides="fileinput">
									<div class="fileinput-new thumbnail" data-trigger="fileinput">
										<img src="{{ $our_reaches->municipaltyImage() }}" style="max-width: 100%;">
									</div>
									<div class="fileinput-preview fileinput-exists thumbnail" data-trigger="fileinput"></div>
									<div>
										<span class="btn btn-default btn-file">
											<span class="fileinput-new">Select</span>
											<span class="fileinput-exists">Change</span>
											<input type="file" name="image">
										</span>
										<a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
									</div>
								</div>
							</div>
						</div>
						<button class="btn btn-success" type="submit">Save</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection