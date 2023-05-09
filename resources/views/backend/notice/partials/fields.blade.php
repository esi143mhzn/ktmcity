<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<label>Nepali Title</label>
			<input type="text" name="title_nep" class="form-control" placeholder="Nepali Title" value="{{ isset($notice) ? $notice->title_nep : '' }}">
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label>English Title</label>
			<input type="text" name="title_eng" class="form-control" placeholder="English Title" value="{{ isset($notice) ? $notice->title_eng : '' }}">
		</div>
	</div>
</div>

{{-- <div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<label>Nepali Excerpt</label>
			<input type="text" name="excerpt_nep" class="form-control" placeholder="Nepali Excerpt" value="{{ isset($notice) ? $notice->excerpt_nep : '' }}">
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label>English Excerpt</label>
			<input type="text" name="excerpt_eng" class="form-control" placeholder="English Excerpt" value="{{ isset($notice) ? $notice->excerpt_nep : '' }}">
		</div>
	</div>
</div> --}}


<div class="row">
	<div class="col-md-2">
		<div class="form-group">
			<label>Type</label>
			<div>
				<div class="btn-group btn-group-toggle" data-toggle="buttons" style="width: 100%;height: 41px;">
					<label class="btn btn-complete {{ (isset($notice) && $notice->link_pdf == 'link') ? ' active' : '' }} {{ !isset($notice) ? ' active' : '' }}" style="width: 50%;line-height: 31px;">
						<input type="radio" name="link_pdf" value="link" id="option1" class="link_pdf" {{ (isset($notice) && $notice->link_pdf == 'link') ? ' checked' : '' }} {{ !isset($notice) ? ' checked' : '' }}> Link
					</label>
					<label class="btn btn-complete {{ (isset($notice) && $notice->link_pdf == 'pdf') ? ' active' : '' }}" style="width: 50%;line-height: 31px;">
						<input type="radio" name="link_pdf" value="pdf" id="option2" class="link_pdf" {{ (isset($notice) && $notice->link_pdf == 'pdf') ? ' checked' : '' }}> PDF
					</label>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-10">
		<div class="form-group link-control">
			<label>Link</label>
			<input type="text" name="link" class="form-control" placeholder="Link" value="{{ isset($notice) ? $notice->link : '' }}">
		</div>

		<div class="form-group pdf-control" style="display: none;">
			<label>PDF</label>
			<input type="file" name="pdf" class="form-control" value="{{ isset($notice) ? $notice->pdf : '' }}">
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-4">
		<div class="form-group">
			<label>Notice/Press Release</label>
			<div class="radio radio-success">
				<input type="radio" value="notice" name="notice_press_release" id="yes" {{ (isset($notice) && $notice->notice_press_release == 'notice') ? ' checked' : '' }} {{ !isset($notice) ? ' checked' : '' }}>
				<label for="yes">Notice</label>
				<input type="radio" value="press_release" name="notice_press_release" id="no" {{ (isset($notice) && $notice->notice_press_release == 'press_release') ? ' checked' : '' }}>
				<label for="no">Press Release</label>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			<label>Status</label>
			<div class="radio radio-success">
				<input type="radio" value="1" name="status" id="status_yes" {{ (isset($notice) && $notice->status) ? ' checked' : '' }} {{ !isset($notice) ? ' checked' : '' }}>
				<label for="status_yes">Enable</label>
				<input type="radio" value="0" name="status" id="status_no" {{ (isset($notice) && !$notice->status) ? ' checked' : '' }}>
				<label for="status_no">Disable</label>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-4">
		<div class="form-group">
			<label for="">Date</label>
			<input type="text" class="form-control bod-picker" name="date_np" value="{{ isset($notice) ? $notice->date_np : '' }}" placeholder="Date">		
		</div>
	</div>
</div>

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/datepicker/nepaliDatePicker.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('assets/datepicker/jquery.nepaliDatePicker.js') }}"></script>
<script src="{{ asset('assets/datepicker/demo.js') }}"></script>
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