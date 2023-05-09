<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<label for="">Nepali Title</label>
			<input type="text" name="title_nep" placeholder="Nepali Title" class="form-control" value="{{ isset($publication) ? $publication->title_nep : '' }}" required>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label for="">English Title</label>
			<input type="text" name="title_eng" placeholder="English Title" class="form-control" value="{{ isset($publication) ? $publication->title_eng : '' }}" required>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<label for="">File/PDF</label>
			<input type="file" name="pdf" class="form-control" value="{{ isset($publication) ? $publication->pdf : '' }}">
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label for="">Choose an option</label>
			<select name="publication_type" class="form-control" required>
				<option value="" disabled selected>छान्नुहोस्</option>
				<option @if(isset($publication) && $publication->publication_type == "Prativedan") {{ 'selected' }} @endif value="Prativedan">प्रतिवेदन</option>
				<option @if(isset($publication) && $publication->publication_type == "Mahatwapurna-Prastuti") {{ 'selected' }} @endif value="Mahatwapurna-Prastuti">महत्वपुर्ण प्रस्तुति</option>
				<option @if(isset($publication) && $publication->publication_type == "Karyaviddhi") {{ 'selected' }} @endif value="Karyaviddhi">कर्यविद्धि</option>
				<option @if(isset($publication) && $publication->publication_type == "Nirdeshika") {{ 'selected' }} @endif value="Nirdeshika">निर्देशिका</option>
				<option @if(isset($publication) && $publication->publication_type == "Others") {{ 'selected' }} @endif value="Others">अन्य</option>
			</select>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<label>Status</label>
			<div class="radio radio-success">
				<input type="radio" value="1" name="status" id="yes" {{ (isset($publication) && $publication->status) ? ' checked' : '' }} {{ !isset($publication) ? 'checked' : '' }}>
				<label for="yes">Enable</label>
				<input type="radio" value="0" name="status" id="no" {{ (isset($publication) && !$publication->status) ? ' checked' : '' }}>
				<label for="no">Disable</label>
			</div>
		</div>
	</div>
</div>