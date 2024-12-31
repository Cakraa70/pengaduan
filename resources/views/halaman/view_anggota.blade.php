@extends('index')
@section('title', 'Pengaduan')

@section('isihalaman')
    <h3><center>Daftar Pengaduan Masyarakat</center></h3>
    
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPengaduanTambah"> 
        Tambah Data Pengaduan
    </button>

    <p>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <td align="center">No</td>
                <td align="center">ID Pengaduan</td>
                <td align="center">Judul Pengaduan</td>
                <td align="center">Deskripsi</td>
                <td align="center">Status</td>
                <td align="center">Aksi</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($pengaduan as $index => $p)
                <tr>
                    <td align="center" scope="row">{{ $index + $pengaduan->firstItem() }}</td>
                    <td>{{ $p->id_pengaduan }}</td>
                    <td>{{ $p->judul }}</td>
                    <td>{{ $p->deskripsi }}</td>
                    <td>{{ $p->status }}</td>
                    <td align="center">
                        
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalPengaduanEdit{{ $p->id_pengaduan }}"> 
                            Edit
                        </button>
                        <!-- Awal Modal EDIT data Pengaduan -->
                        <div class="modal fade" id="modalPengaduanEdit{{ $p->id_pengaduan }}" tabindex="-1" role="dialog" aria-labelledby="modalPengaduanEditLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalPengaduanEditLabel">Form Edit Data Pengaduan</h5>
                                    </div>
                                    <div class="modal-body">

                                        <form name="formpengaduanedit" id="formpengaduanedit" action="/pengaduan/edit/{{ $p->id_pengaduan }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            {{ method_field('PUT') }}
                                            <div class="form-group row">
                                                <label for="judul" class="col-sm-4 col-form-label">Judul Pengaduan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="judul" name="judul" value="{{ $p->judul }}">
                                                </div>
                                            </div>

                                            <p>
                                            <div class="form-group row">
                                                <label for="deskripsi" class="col-sm-4 col-form-label">Deskripsi</label>
                                                <div class="col-sm-8">
                                                    <textarea class="form-control" id="deskripsi" name="deskripsi">{{ $p->deskripsi }}</textarea>
                                                </div>
                                            </div>

                                            <p>
                                            <div class="form-group row">
                                                <label for="status" class="col-sm-4 col-form-label">Status</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" id="status" name="status">
                                                        <option value="Baru" {{ $p->status == 'Baru' ? 'selected' : '' }}>Baru</option>
                                                        <option value="Diproses" {{ $p->status == 'Diproses' ? 'selected' : '' }}>Diproses</option>
                                                        <option value="Selesai" {{ $p->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <p>
                                            <div class="modal-footer">
                                                <button type="button" name="tutup" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                <button type="submit" name="pengaduanedit" class="btn btn-success">Edit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Akhir Modal EDIT data Pengaduan -->
                        |
                        <a href="pengaduan/hapus/{{ $p->id_pengaduan }}" onclick="return confirm('Yakin mau dihapus?')">
                            <button class="btn-danger">
                                Delete
                            </button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!--awal pagination-->
    Halaman : {{ $pengaduan->currentPage() }} <br />
    Jumlah Data : {{ $pengaduan->total() }} <br />
    Data Per Halaman : {{ $pengaduan->perPage() }} <br />

    {{ $pengaduan->links() }}
    <!--akhir pagination-->

    <!-- Awal Modal tambah data Pengaduan -->
    <div class="modal fade" id="modalPengaduanTambah" tabindex="-1" role="dialog" aria-labelledby="modalPengaduanTambahLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalPengaduanTambahLabel">Form Input Data Pengaduan</h5>
                </div>
                <div class="modal-body">
                    <form name="formpengaduantambah" id="formpengaduantambah" action="/pengaduan/tambah" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="judul" class="col-sm-4 col-form-label">Judul Pengaduan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukan Judul Pengaduan">
                            </div>
                        </div>

                        <p>
                        <div class="form-group row">
                            <label for="deskripsi" class="col-sm-4 col-form-label">Deskripsi</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukan Deskripsi Pengaduan"></textarea>
                            </div>
                        </div>

                        <p>
                        <div class="form-group row">
                            <label for="status" class="col-sm-4 col-form-label">Status</label>
                            <div class="col-sm-8">
                                <select class="form-control" id="status" name="status">
                                    <option value="Baru">Baru</option>
                                    <option value="Diproses">Diproses</option>
                                    <option value="Selesai">Selesai</option>
                                </select>
                            </div>
                        </div>

                        <p>
                        <div class="modal-footer">
                            <button type="button" name="tutup" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" name="pengaduantambah" class="btn btn-success">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Modal tambah data Pengaduan -->
    
@endsection
