@extends('layout.v_template')
@section('title','Tabel Karyawan')


@section('content')
<section class="content">
  @if ($inputSuccess == 'success')
    <div class="alert alert-success" role="alert">
      <strong>Data berhasil dimasukkan!</strong>
    </div>
  @elseif ($inputSuccess == 'failed')
    <div class="alert alert-success" role="alert">
      <strong>Data gagal dimasukkan!</strong>
    </div>
  @endif
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tabel Karyawan</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Cabang</th>
                <th>Username</th>
                <th>Nama Karyawan</th>
                <th>Nomor KTP</th>
                <th>Email</th>
                <th>No. Telepon</th>
                <th>Alamat</th>
                <th>Password Sementara</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach($rows as $row)
                <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $row->cabang_nama}}
                  <td>{{ $row->user_id }}</td>
                  <td>{{ $row->nama }}</td>
                  <td>{{ $row->ktp }}</td>
                  <td>{{ $row->email }} </td>
                  <td>{{ $row->telp }}</td>
                  <td>{{ $row->alamat }}</td>
                  <td>
                    @if ($row->password_changed)
                      <div class="alert alert-success " role="alert">
                        Password sudah diubah oleh pengguna
                      </div>
                    @else
                      <div class="alert alert-danger" role="alert">
                        Password belum diubah oleh pengguna<br>
                        PASSWORD: <strong>{{$row->password}}</strong>
                      </div>
                    @endif
                  </td>
                  <td>
                      <a href="">
                        <button type="button" class="btn btn-block btn-success btn-sm">Edit</button>
                      </a>
                      <a href="" onClick="return confirm('Apakah Anda yakin ingin menghapus data?')">
                        <button type="button" class="btn btn-block btn-danger btn-sm">Delete</button>
                      </a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
</section>
@endsection