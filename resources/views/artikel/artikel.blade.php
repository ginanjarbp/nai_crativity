@extends('partials.navbar') <!-- Menggunakan layout navbar.blade.php -->

@section('title', 'Artikel') <!-- Title khusus untuk halaman ini -->

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Artikel</h1>
                </div>
                <!-- Menampilkan pesan sukses -->
                @if(session('success'))
                    <div class="alert alert-success" id="success-alert">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ url('/createArtikel')}}">Tambah Data Artikel</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Responsive Hover Table</h3>
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Judul</th>
                                        <th>Konten</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        <!-- Looping data artikel -->
                                        @foreach($artikels as $artikel)
                                        
                                            <tr>
                                                <!-- Menampilkan nomor urut -->
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $artikel->judul }}</td>
                                                <td>{{ Str::limit($artikel->konten, 50) }}</td> <!-- Menampilkan 50 karakter pertama dari konten -->
                                                <td>
                                                    @if($artikel->gambar)
                                                        <img src="{{ Storage::url($artikel->gambar) }}" width="50" alt="Gambar Artikel">
                                                    @else
                                                        <span>Tidak ada gambar</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <!-- Tautan untuk edit dan delete -->
                                                    <a href="{{ route('artikel.edit', $artikel->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                    <form action="{{ route('artikel.destroy', $artikel->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
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

@section('scripts')
<script>
    // Menampilkan alert dan menghilangkannya setelah 2 detik
    @if(session('success'))
        setTimeout(function() {
            var alert = document.getElementById('success-alert');
            alert.style.display = 'none';
        }, 2000); // 2 detik
    @endif
</script>
@endsection
