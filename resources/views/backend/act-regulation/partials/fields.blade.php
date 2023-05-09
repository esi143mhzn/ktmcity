<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<label for="">Nepali Title</label>
			<input type="text" name="title_nep" placeholder="Nepali Title" class="form-control" value="{{ isset($act_regulation) ? $act_regulation->title_nep : '' }}">
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label for="">English Title</label>
			<input type="text" name="title_eng" placeholder="English Title" class="form-control" value="{{ isset($act_regulation) ? $act_regulation->title_eng : '' }}">
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<label>File/PDF</label>
			<input type="file" name="pdf" class="form-control" value="{{ isset($act_regulation) ? $act_regulation->pdf : '' }}">
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label>Status</label>
			<div class="radio radio-success">
				<input type="radio" value="1" name="status" id="yes" {{ (isset($act_regulation) && $act_regulation->status) ? ' checked' : '' }} {{ !isset($act_regulation) ? 'checked' : '' }}>
				<label for="yes">Enable</label>
				<input type="radio" value="0" name="status" id="no" {{ (isset($act_regulation) && !$act_regulation->status) ? ' checked' : '' }}>
				<label for="no">Disable</label>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<label>Image (275x350)</label>
	<div>	
		<div class="fileinput fileinput-new" data-provides="fileinput">
			<div class="fileinput-new thumbnail" data-trigger="fileinput">
				<img src="{{ isset($act_regulation) ? $act_regulation->act_image() : 'http://via.placeholder.com/275x350' }}" style="max-width: 100%;">
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