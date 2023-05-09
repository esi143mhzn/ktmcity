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
						<li class="breadcrumb-item active">न्यूजलेटर</li>
					</ol>
					<!-- END BREADCRUMB -->
				</div>
			</div>
		</div>

		<div class="container-fluid sm-padding-10">
			<div class="card card-default">
				<div class="card-header  separator">
					<div class="card-title card-title-nepali">न्यूजलेटर</div>
					<div class="card-controls">
						<ul>
							<li></li>
						</ul>
					</div>
				</div>
				{{ Form::model($newsletters, ['route' => ['backend.newsletter.update', $newsletters->id], 'method' => 'PATCH']) }}
				<div class="card-body">
					<table class="table table-striped table-bordered m-t-30">
						<thead>
							<tr>
								<td>Name</td>
								<td><input type="text" name="name" value="{{ $newsletters->name }}" class="form-control">
								</td>
							</tr>
							<tr>
								<td>Email</td>
								<td>
									<input type="text" name="email" value="{{ $newsletters->email }}" class="form-control">
								</td>
							</tr>
							<tr>
								<td>Choose</td>
								<td>
									{{ Form::checkbox('publication',1, null,Request::old('publication'), ['class' => 'form-control'] )}}<span>Publication</span> 
									{{ Form::checkbox('report',1, null, Request::old('report'), ['class' => 'form-control'] )}} <span>Report</span>
									{{ Form::checkbox('notice',1, null, Request::old('notice'), ['class' => 'form-control'] )}} <span>Notice</span>
									{{ Form::checkbox('act_regulation',1, null, Request::old('act_regulation'), ['class' => 'form-control'] )}} <span>Act & Regulations</span>
								</td>
							</tr>
							<tr>
								<td>Confirmed</td>
								<td>{{ Form::checkbox('confirmed',1, null, Request::old('confirmed'), ['class' => 'form-control'] )}} <span>Confirmed</span>
								</tr>
							</thead>
						</table>
					</div>
					<button class="btn btn-primary btn-sm" style="margin-left: 20px;"><i class="fa fa-save"></i> Save</button>
					{{ Form::close() }}
				</div>
			</div>
		</div>
	</div>
	@endsection