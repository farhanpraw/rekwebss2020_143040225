@extends('layout.main')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Data Makanan</h1>
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
            <div class="card-body">
              <form action="{{ route('makanan.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="Gambar" class="control-label">Gambar</label><br>
                  <input type="file" class="@error('Gambar') is-invalid @enderror" name="Gambar" value="{{ old('Gambar') }}">
                  @error('Gambar')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="Nama" class="control-label">Nama</label>
                  <input type="text" class="form-control @error('Nama') is-invalid @enderror" name="Nama" placeholder="Nama" value="{{ old('Nama') }}">
                  @error('Nama')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="Jenis" class="control-label">Jenis</label>
                  <input type="text" class="form-control @error('Jenis') is-invalid @enderror" name="Jenis" placeholder="Jenis" value="{{ old('Jenis') }}">
                  @error('Jenis')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="Rating" class="control-label">Rating</label>
                  <input type="text" class="form-control @error('Rating') is-invalid @enderror" name="Rating" placeholder="Rating" value="{{ old('tgl_lahir') }}">
                  @error('Rating')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="Deskripsi" class="control-label">Deskripsi</label>
                  <input type="text" class="form-control @error('Deskripsi') is-invalid @enderror" name="Deskripsi" placeholder="Deskripsi" value="{{ old('Deskripsi') }}">
                  @error('Deskripsi')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="Ulasan" class="control-label">Ulasan</label>
                  <input type="text" class="form-control @error('Ulasan') is-invalid @enderror" name="Ulasan" placeholder="Ulasan" value="{{ old('Ulasan') }}">
                  @error('Ulasan')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="Rekomendasi" class="control-label">Rekomendasi</label>
                  <input type="text" class="form-control @error('Rekomendasi') is-invalid @enderror" name="Rekomendasi" placeholder="Rekomendasi" value="{{ old('Rekomendasi') }}">
                  @error('Rekomendasi')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="Promo" class="control-label">Promo</label>
                  <input type="text" class="form-control @error('Promo') is-invalid @enderror" name="Promo" placeholder="Promo" value="{{ old('Promo') }}">
                  @error('Promo')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="Harga" class="control-label">Harga</label>
                  <input type="text" class="form-control @error('Harga') is-invalid @enderror" name="Harga" placeholder="Harga" value="{{ old('Harga') }}">
                  @error('Harga')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group">
                  <button type="submit" name="submit" class="btn btn-info">Tambah</button>
                  <a href="{{ route('makanan.index') }}" class="btn btn-secondary">
                    <i class="nav-icon fas fa-angle-left"></i>
                    <span>Back</span>
                  </a>
                </div>
              </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

@endsection