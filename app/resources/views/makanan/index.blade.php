@extends('layout.main')

@section('content')

<div class="content-wrapper">

  @if (session('status'))
  <div class="alert alert-success">
    {{ session('status') }}
  </div>
  @endif

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Makanan</h1>
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
              <a href="{{ route('makanan.create') }}" class="btn btn-primary">
                <i class="nav-icon fas fa-pen"></i>
                <span>Tambah Data</span>
              </a>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr style="text-align: center;">
                    <th>#</th>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Jenis</th>
                    <th>Rating</th>
                    <th>Deskripsi</th>
                    <th>Ulasan</th>
                    <th>Rekomendasi</th>
                    <th>Promo</th>
                    <th>Harga</th>
                    <th colspan="2">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach( $makanan as $mk)
                  <tr style="text-align: center;">
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>
                      <img src="{{ url('assets/img/makanan/')}}/{{ $mk->Gambar}}" alt="Foto makanan" style="width:100px; height:150px">
                    </td>
                    <td>{{ $mk->Nama }}</td>
                    <td>{{ $mk->Jenis }}</td>
                    <td>{{ $mk->Rating }}</td>
                    <td>{{ $mk->Deskripsi }}</td>
                    <td>{{ $mk->Ulasan }}</td>
                    <td>{{ $mk->Rekomendasi }}</td>
                    <td>{{ $mk->Promo }}</td>
                    <td>{{ $mk->Harga }}</td>
                    <td>
                      <a href="{{ route('makanan.edit', $mk->ID) }}" class="btn btn-success">
                        <i class="nav-icon fas fa-edit" , style="color: white;"></i>
                        <span style="color: white;">Ubah</span>
                      </a>
                    </td>
                    <td>
                      <form action="{{ route('makanan.destroy', $mk->ID) }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">
                          <i class="nav-icon fas fa-eraser"></i>
                          <span>hapus</span>
                        </button>
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
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

@endsection