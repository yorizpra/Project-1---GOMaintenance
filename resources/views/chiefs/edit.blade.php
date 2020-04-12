@extends('layout/main')

@section('title', 'Form Ubah Data Ketua Jurusan')

@section('container')
<div class="container">
  <center><h1 class="mt-3">Form Ubah Data Ketua Jurusan</h1></center>

  <form method="post" action="Edit/{{ $chief->id_kajur }}">
  @method('patch')
  @csrf
  <div class="form-group">
    <label for="id_kajur">ID_Kajur</label>
    <input type="number" class="form-control @error('id_kajur') is-invalid @enderror" id="id_kajur" placeholder="Masukan ID_Kajur" name="id_kajur" value="{{ $chief->id_kajur }}">
    @error('id_kajur')
      <div class="invalid-feedback">
        {{$message}}
      </div>
    @enderror
  </div>
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan nama" name="nama" value="{{ $chief->nama }}">
    @error('nama')
      <div class="invalid-feedback">
        {{$message}}
      </div>
    @enderror
  </div>
  <div class="form-group">
    <label for="jenis_kelamin">Jenis Kelamin</label>
    <select class="form-control @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin" name="jenis_kelamin">
      <option selected disabled value="">Pilih Jenis Kelamin</option>
      <option value="Laki-laki"  {{ old('jenis_kelamin') == 1 ? 'selected' : '' }}>Laki-laki</option>
      <option value="Perempuan"  {{ old('jenis_kelamin') == 2 ? 'selected' : '' }}>Perempuan</option>
    </select>
    @error('jenis_kelamin')
      <div class="invalid-feedback">
        {{$message}}
      </div>
    @enderror
  </div>
  <!-- <form method="post" action="/users/create"> -->
  <div class="form-group">
  <label for="no_telepon">Nomor Telepon</label>
  <input type="number" class="form-control @error('no_telepon') is-invalid @enderror" id="no_telepon" placeholder="Masukan Nomor Telepon" name="no_telepon" value="{{ $chief->no_telepon }}">
    @error('no_telepon')
      <div class="invalid-feedback">
        {{$message}}
      </div>
    @enderror
  </div>
  <div class="form-group">
    <label for="alamat">Alamat</label>
    <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" rows="3" name="alamat">{{ $chief->alamat }}</textarea>
    @error('alamat')
      <div class="invalid-feedback">
        {{$message}}
      </div>
    @enderror
  </div>
  <div class="form-group">
    <label for="level_user">Level User</label>
    <select class="form-control @error('level_user') is-invalid @enderror" id="level_user" name="level_user">
      <option selected disabled value="">Pilih Level User</option>
      <option  value="Mahasiswa"  {{ old('level_user') == 1 ? 'selected' : '' }}>Mahasiswa</option>
      <option value="Dosen"  {{ old('level_user') == 2 ? 'selected' : '' }}>Dosen</option>
      <option value="Ketua Jurusan"  {{ old('level_user') == 3 ? 'selected' : '' }}>Ketua Jurusan</option>
    </select>
    @error('level_user')
      <div class="invalid-feedback">
        {{$message}}
      </div>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Ubah Data!</button>
</form>

</div>
@endsection