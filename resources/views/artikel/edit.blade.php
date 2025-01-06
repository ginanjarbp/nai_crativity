@extends('partials.navbar') <!-- Menggunakan layout navbar.blade.php -->

@section('title', 'Edit Artikel') <!-- Title khusus untuk halaman ini -->

@section('content')
<script>CKEDITOR.disableAutoInline = true;</script>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 text-center">
                    <h1>Edit Artikel</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid d-flex justify-content-center align-items-center" style="min-height: 70vh;">
            <div class="row w-100">
                <div class="col-md-8 mx-auto">
                    <!-- General form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Artikel</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- Form start -->
                        <form action="{{ route('artikel.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <!-- Input Judul Artikel -->
                                <div class="form-group">
                                    <label for="judul">Judul Artikel</label>
                                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Enter Judul" value="{{ old('judul', $artikel->judul) }}">
                                    @error('judul') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                
                                <!-- Input Konten Artikel -->
                                <div class="form-group">
                                    <label for="konten">Content Artikel</label>
                                    <textarea class="form-control" id="konten" name="konten">{{ old('konten', $artikel->konten) }}</textarea>
                                    @error('konten') 
                                        <div class="text-danger">{{ $message }}</div> 
                                    @enderror
                                </div>
                                
                                <!-- Input Gambar Artikel -->
                                <div class="form-group">
                                    <label for="gambar">Gambar Artikel</label>
                                    <input type="file" class="form-control" id="gambar" name="gambar">
                                    @if($artikel->gambar)
                                        <img src="{{ Storage::url($artikel->gambar) }}" width="100" alt="Gambar Artikel">
                                    @endif
                                    @error('gambar') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <!-- Card Footer -->
                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-primary">Update Artikel</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

<script>
    // Mengaktifkan CKEditor untuk textarea dengan id "konten"
    CKEDITOR.replace('konten', {
        toolbar: [
            { name: 'document', items: ['Source', '-', 'Save', 'NewPage', 'ExportPdf', 'Preview', 'Print'] },
            { name: 'clipboard', items: ['Cut', 'Copy', 'Paste', '-', 'Undo', 'Redo'] },
            { name: 'editing', items: ['Find', 'Replace', '-', 'SelectAll'] },
            { name: 'styles', items: ['Format', 'Font', 'FontSize'] },
            { name: 'colors', items: ['TextColor', 'BGColor'] },
            { name: 'tools', items: ['Maximize', 'ShowBlocks'] },
            '/',
            { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript'] },
            { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote'] },
            { name: 'links', items: ['Link', 'Unlink', 'Anchor'] },
            { name: 'insert', items: ['Image', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar'] }
        ],
        height: 300 // Menyesuaikan tinggi editor
    });
</script>
@endsection
