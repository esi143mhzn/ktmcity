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
						<li class="breadcrumb-item active">तस्वीर संग्रह</li>
					</ol>
					<!-- END BREADCRUMB -->
				</div>
			</div>
		</div>

		<div class="container-fluid sm-padding-10">
			<div class="card card-default">
				<div class="card-header  separator">
					<div class="card-title card-title-nepali">तस्वीर</div>
					<div class="card-controls">
					</div>
				</div>
				<div class="card-body m-t-10">
					<form action="{{ route('backend.image-gallery-upload.update', $image_gallery->id) }}" method="post" enctype="multipart/form-data">
						@csrf
						@method('PATCH')
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Images (Multiple)</label>
									<input type="file" name="images[]" class="form-control" multiple>
								</div>
							</div>
						</div>
						
						<button class="btn btn-success m-t-10" type="submit">Save</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection