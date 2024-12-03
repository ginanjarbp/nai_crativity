@extends('partials.navbar') <!-- Menggunakan layout navbar.blade.php -->

@section('title', 'Dashboard') <!-- Title khusus untuk halaman ini -->

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Add Artikel</h1>
          </div>
         
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Artikel</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
    @csrf <!-- Token CSRF untuk keamanan -->
    <div class="card-body">
        <div class="form-group">
            <label for="judul">Judul Artikel</label>
            <input type="text" class="form-control" id="judul" name="judul" placeholder="Enter Judul" value="{{ old('judul') }}">
            @error('judul') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="konten">Content Artikel</label>
            <textarea class="form-control" id="konten" name="konten" placeholder="Enter Content">{{ old('konten') }}</textarea>
            @error('konten') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="gambar">Gambar Artikel</label>
            <input type="file" class="form-control" id="gambar" name="gambar">
            @error('gambar') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

            </div>
            <!-- /.card -->

         

            <!-- Input addon -->
           
            

          </div>
          <!--/.col (left) -->
          <!-- right column -->
        
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
@endsection
