@csrf

<div class="form-group">
    <label>Name</label>
    <input type="text" name="name" value="{{ old('name', $offer->name ?? '') }}" class="form-control @error('name') is-invalid @enderror" required>
    @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label>Description</label>
    <textarea name="description" class="form-control @error('description') is-invalid @enderror" required>{{ old('description', $offer->description ?? '') }}</textarea>
    @error('description')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label>Discount (%)</label>
    <input type="number" name="discount" value="{{ old('discount', $offer->discount ?? '') }}" class="form-control @error('discount') is-invalid @enderror" required>
    @error('discount')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label>Start Date & Time</label>
    <input type="text" id="start_date" name="start_date"
        value="{{ old('start_date', isset($offer->start_date) ? \Carbon\Carbon::parse($offer->start_date)->format('Y-m-d H:i') : '') }}"
        class="form-control flatpickr-datetime @error('start_date') is-invalid @enderror" required>
    @error('start_date')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label>End Date & Time</label>
    <input type="text" id="end_date" name="end_date"
        value="{{ old('end_date', isset($offer->end_date) ? \Carbon\Carbon::parse($offer->end_date)->format('Y-m-d H:i') : '') }}"
        class="form-control flatpickr-datetime @error('end_date') is-invalid @enderror" required>
    @error('end_date')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label>Image</label>
    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" onchange="previewImage(event)">
    @error('image')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    <br>
    <img id="image-preview" src="{{ isset($offer) && $offer->image ? asset('storage/' . $offer->image) : '' }}"
        style="{{ isset($offer) && $offer->image ? '' : 'display: none;' }} max-height: 200px;" class="img-thumbnail mt-2">
</div>

<button type="submit" class="btn btn-success mt-2">Save</button>
@push('scripts')
<script>
    flatpickr(".flatpickr-datetime", {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        minDate: "today",
        time_24hr: true,
    });

    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = function() {
            const output = document.getElementById('image-preview');
            output.src = reader.result;
            output.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endpush
