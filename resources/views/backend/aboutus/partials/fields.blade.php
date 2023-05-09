<div class="row">
	<div class="col-md-4">
		<div class="form-group">
			<label>Image (380x408)</label>
			<div>	
				<div class="fileinput fileinput-new" data-provides="fileinput">
					<div class="fileinput-new thumbnail" data-trigger="fileinput">
						<img src="{{ isset($aboutus) ? $aboutus->about_image() : 'http://via.placeholder.com/380x408' }}" style="max-width: 100%;">
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
	</div>
	<div class="col-md-8">
		<div class="form-group">
			<label>Nepali Description </label>
			<textarea name="description_nep" class="summernote">{{ $aboutus->description_nep }}</textarea>
		</div>

		<div class="form-group">
			<label>English Description </label>
			<textarea name="description_eng" class="summernote">{{ $aboutus->description_eng }}</textarea>
		</div>
	</div>
</div>


@push('styles')
	<link href="{{ asset('dist/assets/plugins/summernote/css/summernote.css')}}" rel="stylesheet" type="text/css" media="screen">
@endpush

@push('scripts')
	<script src="{{ asset('dist/assets/plugins/summernote/js/summernote.min.js')}}" type="text/javascript"></script>
	<script>
		$('.summernote').summernote({
            height: 600,
            onfocus: function(e) {
                $('body').addClass('overlay-disabled');
            },
            onblur: function(e) {
                $('body').removeClass('overlay-disabled');
            }
        });
	</script>
@endpush