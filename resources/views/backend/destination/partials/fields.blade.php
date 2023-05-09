<div class="form-group">
	<label>Image (890x455)</label>
	<div>	
		<div class="fileinput fileinput-new" data-provides="fileinput">
			<div class="fileinput-new thumbnail" data-trigger="fileinput">
				<img src="{{ isset($destination) ? $destination->destination_image() : 'http://via.placeholder.com/890x455' }}" style="max-width: 100%;">
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
			<label>Title</label>
			<input name="title" class="form-control" cols="30" placeholder="Title" type="text" value="{{ isset($destination) ? $destination->title : '' }}">
		</div>
	</div>
	<div class="col-md-6">
        <div class="form-group">
    <label>Price</label>
    <input type="text" name="price" class="form-control" placeholder="Price" value="{{ isset($destination) ? $destination->price : '' }}">
</div>
		
	</div>
</div>

<div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control" cols="30" rows="10" placeholder="Description">{{ isset($destination) ? $destination->description : '' }}</textarea>
        </div>

        <div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<label>Duration</label>
			<input name="duration" class="form-control" cols="30" placeholder="duration" type="text" value="{{ isset($destination) ? $destination->duration : '' }}">
		</div>
	</div>
	<div class="col-md-6">
        <div class="form-group">
    <label>Max People</label>
    <input type="text" name="max_people" class="form-control" placeholder="N.o of visitors" value="{{ isset($destination) ? $destination->max_people : '' }}">
</div>
		
	</div>
</div>


<div class="form-group">
	<label>Status</label>
	<div class="radio radio-success">
		<input type="radio" value="1" name="status" id="yes" {{ (isset($destination) && $destination->status) ? ' checked' : '' }} {{ !isset($destination) ? ' checked' : '' }}>
		<label for="yes">Enable</label>
		<input type="radio" value="0" name="status" id="no" {{ (isset($destination) && !$destination->status) ? ' checked' : '' }}>
		<label for="no">Disable</label>
	</div>
</div>

<button class="btn btn-success m-t-10" type="submit">Save</button>
