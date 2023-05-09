<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<label>Title</label>
			<textarea name="title" class="form-control" cols="30" rows="10" placeholder="Title">{{ isset($video_galleries) ? $video_galleries->title : '' }}</textarea>
		</div>

		<div class="form-group">
			<label>Video Link</label>
			<input type="text" name="video_link" class="form-control" placeholder="Video Link" value="{{ isset($video_galleries) ? $video_galleries->video_link : '' }}">
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<label>Status</label>
			<div class="radio radio-success">
				<input type="radio" value="1" name="status" id="yes" {{ (isset($video_galleries) && $video_galleries->status) ? ' checked' : '' }} {{ !isset($video_galleries) ? 'checked' : '' }}>
				<label for="yes">Enable</label>
				<input type="radio" value="0" name="status" id="no" {{ (isset($video_galleries) && !$video_galleries->status) ? ' checked' : '' }}>
				<label for="no">Disable</label>
			</div>
		</div>
	</div>
</div>

<button class="btn btn-success m-t-10" type="submit">Save</button>
