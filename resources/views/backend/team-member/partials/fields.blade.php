<div class="form-group">
	<label>Image (150x150)</label>
	<div>	
		<div class="fileinput fileinput-new" data-provides="fileinput">
			<div class="fileinput-new thumbnail" data-trigger="fileinput">
				<img src="{{ isset($team_members) ? $team_members->image_team_members() : 'http://via.placeholder.com/200' }}" style="max-width: 100%;">
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
	<div class="col-md-6">
		<div class="form-group">
			<label>Name Nepali</label>
			<input name="name_nep" class="form-control" placeholder="Name" value="{{ isset($team_members) ? $team_members->name_nep : '' }}" required>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label>Name English</label>
			<input name="name_eng" class="form-control" placeholder="Name" value="{{ isset($team_members) ? $team_members->name_eng : '' }}" required>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<label>Post Nepali</label>
			<input name="post_nep" class="form-control" placeholder="Post" value="{{ isset($team_members) ? $team_members->post_nep : '' }}" required>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label>Post English</label>
			<input name="post_eng" class="form-control" placeholder="Post" value="{{ isset($team_members) ? $team_members->post_eng : '' }}" required>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<label>Status</label>
			<div class="radio radio-success">
				<input type="radio" value="1" name="status" id="yes" {{ (isset($team_members) && $team_members->status) ? ' checked' : '' }} {{ !isset($team_members) ? 'checked' : '' }}>
				<label for="yes">Enable</label>
				<input type="radio" value="0" name="status" id="no" {{ (isset($team_members) && !$team_members->status) ? ' checked' : '' }}>
				<label for="no">Disable</label>
			</div>
		</div>
	</div>
</div>