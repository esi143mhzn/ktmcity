<div class="form-group">
	<div class="btn-group btn-group-toggle" data-toggle="buttons">
		<label class="btn btn-complete active">
			<input type="radio" name="link_pdf" value="link" id="option1" class="link_pdf" {{ (isset($flash_news) && $flash_news->link_pdf == 'link') ? ' checked' : '' }} {{ !isset($flash_news) ? ' checked' : '' }}> Link
		</label>
		<label class="btn btn-complete">
			<input type="radio" name="link_pdf" value="pdf" id="option2" class="link_pdf" {{ (isset($flash_news) && $flash_news->link_pdf == 'pdf') ? ' checked' : '' }}> File/PDF
		</label>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<label>Nepali Title</label>
			<input type="text" name="title_nep" class="form-control" placeholder="Nepali Title" value="{{ isset($flash_news) ? $flash_news->title_nep : '' }}">
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label>English Title</label>
			<input type="text" name="title_eng" class="form-control" placeholder="English Title" value="{{ isset($flash_news) ? $flash_news->title_eng : '' }}">
		</div>
	</div>
</div>

<div class="form-group link-control">
	<label>Link</label>
	<input type="text" name="link" class="form-control" placeholder="Link" value="{{ isset($flash_news) ? $flash_news->link : '' }}">
</div>

<div class="form-group pdf-control" style="display: none;">
	<label>File/PDF</label>
	<input type="file" name="pdf" class="form-control" value="{{ isset($flash_news) ? $flash_news->pdf : '' }}">
</div>

<div class="form-group">
	<label>Status</label>
	<div class="radio radio-success">
		<input type="radio" value="1" name="status" id="yes" {{ (isset($flash_news) && $flash_news->status) ? ' checked' : '' }} {{ !isset($flashnews) ? 'checked' : '' }}>
		<label for="yes">Enable</label>
		<input type="radio" value="0" name="status" id="no" {{ (isset($flash_news) && !$flash_news->status) ? ' checked' : '' }}>
		<label for="no">Disable</label>
	</div>
</div>

<button class="btn btn-success m-t-10" type="submit">Save</button>

@push('scripts')
	<script>
		link_pdf_show_hide($('.link_pdf:checked').val());
		$('.link_pdf').on('change', function() {
			var link_pdf = $(this).val();
			link_pdf_show_hide(link_pdf);
		});

		function link_pdf_show_hide(link_pdf) {
			if(link_pdf == 'link') {
				$('.pdf-control').hide();
				$('.link-control').show();
			} else {
				$('.pdf-control').show();
				$('.link-control').hide();
			}
		}
	</script>
@endpush