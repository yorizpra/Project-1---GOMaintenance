@extends('layout/main')

@section('title', 'Form Ubah Data User')

@section('container')
<div class="container">
  <center><h1 class="mt-3">Form Ubah Data User</h1></center>

  <form method="post" action="Edit/{{ $usr->id_user }}">
  @method('patch')
  @csrf
  <div class="form-group">
    <label for="id_user">ID_User</label>
    <input type="number" class="form-control @error('id_user') is-invalid @enderror" id="id_user" placeholder="Masukan ID_User" name="id_user" value="{{ $usr->id_user }}">
    @error('id_user')
      <div class="invalid-feedback">
        {{$message}}
      </div>
    @enderror
  </div>
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan nama" name="nama" value="{{ $usr->nama }}">
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
  <input type="number" class="form-control @error('no_telepon') is-invalid @enderror" id="no_telepon" placeholder="Masukan Nomor Telepon" name="no_telepon" value="{{ $usr->no_telepon }}">
    @error('no_telepon')
      <div class="invalid-feedback">
        {{$message}}
      </div>
    @enderror
  </div>
  <div class="form-group">
    <label for="alamat">Alamat</label>
    <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" rows="3" name="alamat">{{ $usr->alamat }}</textarea>
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