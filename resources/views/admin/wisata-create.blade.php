@extends('admin.layouts.app')

@section('title', 'Tambah Destinasi Wisata')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Destinasi Wisata</h1>
        <a href="{{ route('admin.wisata') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Destinasi</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.wisata.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group">
                    <label for="nama_wisata">Nama Wisata <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('nama_wisata') is-invalid @enderror" 
                           id="nama_wisata" name="nama_wisata" value="{{ old('nama_wisata') }}" 
                           placeholder="Masukkan nama destinasi wisata" required>
                    @error('nama_wisata')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi <span class="text-danger">*</span></label>
                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" 
                              id="deskripsi" name="deskripsi" rows="5" 
                              placeholder="Masukkan deskripsi destinasi wisata" required>{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="gambar">Gambar <span class="text-danger">*</span></label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('gambar') is-invalid @enderror" 
                               id="gambar" name="gambar" accept="image/*" required 
                               onchange="previewImage(event)">
                        <label class="custom-file-label" for="gambar">Choose file</label>
                        @error('gambar')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <small class="form-text text-muted">Format: JPG, JPEG, PNG, GIF (Max: 2MB)</small>
                    
                    <!-- Image Preview -->
                    <div class="mt-3" id="imagePreview" style="display: none;">
                        <img id="preview" src="" alt="Preview" style="max-width: 300px; border-radius: 5px; border: 1px solid #ddd;">
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                    <a href="{{ route('admin.wisata') }}" class="btn btn-secondary">
                        <i class="fas fa-times"></i> Batal
                    </a>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('scripts')
<script>
    // Preview image before upload
    function previewImage(event) {
        const file = event.target.files[0];
        const preview = document.getElementById('preview');
        const previewContainer = document.getElementById('imagePreview');
        const label = document.querySelector('.custom-file-label');
        
        if (file) {
            label.textContent = file.name;
            
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                previewContainer.style.display = 'block';
            }
            reader.readAsDataURL(file);
        } else {
            previewContainer.style.display = 'none';
            label.textContent = 'Choose file';
        }
    }
</script>
@endsection
@extends('admin.layouts.app')