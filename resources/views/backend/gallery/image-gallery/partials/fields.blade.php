<div class="form-group">
	<label>Image (800x450)</label>
	<div>	
		<div class="fileinput fileinput-new" data-provides="fileinput">
			<div class="fileinput-new thumbnail" data-trigger="fileinput">
				<img src="{{ isset($image_galleries) ? $image_galleries->image_gallery() : 'http://via.placeholder.com/800x450' }}" style="max-width: 100%;">
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

<div class="row">
	<div class="col-md-8">
		<div class="form-group">
			<label>Title</label>
			<textarea name="title" class="form-control" cols="30" rows="10" placeholder="Title">{{ isset($image_galleries) ? $image_galleries->title : '' }}</textarea>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<label>Status</label>
			<div class="radio radio-success">
				<input type="radio" value="1" name="status" id="yes" {{ (isset($image_galleries) && $image_galleries->status) ? ' checked' : '' }} {{ !isset($image_galleries) ? 'checked' : '' }}>
				<label for="yes">Enable</label>
				<input type="radio" value="0" name="status" id="no" {{ (isset($image_galleries) && !$image_galleries->status) ? ' checked' : '' }}>
				<label for="no">Disable</label>
			</div>
		</div>
	</div>
</div>

<button class="btn btn-success m-t-10" type="submit">Save</button>
