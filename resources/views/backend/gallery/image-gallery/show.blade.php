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
						<li class="breadcrumb-item active">तस्वीर संग्रह</li>
					</ol>
					<!-- END BREADCRUMB -->
				</div>
			</div>
		</div>

		<div class="container-fluid sm-padding-10">
			<div class="card card-default">
				<div class="card-header  separator">
					<div class="card-title card-title-nepali">तस्वीर संग्रह</div>
					<div class="card-controls">
						<ul>
							<li>
								<a href="{{ route('backend.image-gallery-upload.edit', $image_gallery->id) }}" class="btn btn-success btn-sm add-create-btn">तस्वीर थप गर्नुहोस्</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="card-body">
					<div class="m-t-20">
						<div class="row">
							@foreach($image_gallery_images as $image_gallery_image)
								<div class="col-md-3" style="margin-bottom: 10px;">
									<img src="{{ $image_gallery_image->gallery_image_thumb() }}" alt="" class="image-responsive-height">
									<form action="{{ route('backend.image.status', $image_gallery_image->id) }}" method="post" class="status-image">
										@csrf
										@method('POST')
										@if($image_gallery_image->status == true)
											<button class="btn btn-xs btn-success" type="submit">Shown</button>
										@else
											<button class="btn btn-xs btn-info" type="submit">Hidden</button>
										@endif
									</form>
									
									<form action="{{ route('backend.image-gallery-upload.destroy', $image_gallery_image->id) }}" class="delete-image" method="post">
										@csrf
										@method('DELETE')
										<button class="btn btn-xs btn-danger">Delete</button>
									</form>
								</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@push('styles')
	<style>
		.delete-image {
			position: absolute;
		    top: 5px;
		    right: 10px;
		}
		.status-image {
		    position: absolute;
		    top: 5px;
		    right: 65px;
		}
	</style>
@endpush