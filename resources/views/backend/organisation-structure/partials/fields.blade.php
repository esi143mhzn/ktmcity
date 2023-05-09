<div class="form-group">
	<label>Nepali</label>
	<textarea name="description_nep" class="summernote">{{ $organisation_structure->description_nep }}</textarea>
</div>

<div class="form-group">
    <label>English</label>
    <textarea name="description_eng" class="summernote">{{ $organisation_structure->description_eng }}</textarea>
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