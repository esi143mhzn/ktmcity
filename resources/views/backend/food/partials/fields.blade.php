<div class="form-group">
	<label>Image (890x455)</label>
	<div>	
		<div class="fileinput fileinput-new" data-provides="fileinput">
			<div class="fileinput-new thumbnail" data-trigger="fileinput">
				<img src="{{ isset($food) ? $food->food_image() : 'http://via.placeholder.com/890x455' }}" style="max-width: 100%;">
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
			<input name="title" class="form-control" cols="30" placeholder="Title" type="text" value="{{ isset($food) ? $food->title : '' }}">
		</div>
	</div>
	<div class="col-md-6">
        <div class="form-group">
    <label>Price</label>
    <input type="text" name="price" class="form-control" placeholder="Price" value="{{ isset($food) ? $food->price : '' }}">
</div>
		
	</div>
</div>

<div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control" cols="30" rows="10" placeholder="Description">{{ isset($food) ? $food->description : '' }}</textarea>
        </div>

<div class="form-group">
	<label>Status</label>
	<div class="radio radio-success">
		<input type="radio" value="1" name="status" id="yes" {{ (isset($food) && $food->status) ? ' checked' : '' }} {{ !isset($food) ? ' checked' : '' }}>
		<label for="yes">Enable</label>
		<input type="radio" value="0" name="status" id="no" {{ (isset($food) && !$food->status) ? ' checked' : '' }}>
		<label for="no">Disable</label>
	</div>
</div>

<button class="btn btn-success m-t-10" type="submit">Save</button>
