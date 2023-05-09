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
						<li class="breadcrumb-item active">कर्मचारी विवरण</li>
					</ol>
					<!-- END BREADCRUMB -->
				</div>
			</div>
		</div>

		<div class="container-fluid sm-padding-10">
			<div class="card card-default">
				<div class="card-header  separator">
					<div class="card-title card-title-nepali">कर्मचारी विवरण</div>
					<div class="card-controls">
					</div>
				</div>
				<div class="card-body m-t-10">
					<form action="{{ route('backend.team-member.update', $team_members->id) }}" method="post" enctype="multipart/form-data">
						@csrf
						@method('PATCH')
						@include('backend.team-member.partials.fields')
						<button class="btn btn-success" type="submit">Save</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection