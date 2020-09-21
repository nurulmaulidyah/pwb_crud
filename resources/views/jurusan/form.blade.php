@extends('layouts.frontend')

@section('content')
    @if (\Route::current()->getName() == 'jurusan.edit')
        <h1>Edit Jurusan</h1>
        <form action="{{ route('jurusan.update', $jurusan->id) }}" method="POST">
        @method('PATCH')
    @else
        <h1>Tambah Jurusan</h1>
        <form action="{{ route('jurusan.store') }}" method="POST">
    @endif
            {{ csrf_field() }}
            <div class="form-group">
                <label for="nama_jurusan">Nama Jurusan</label>
                <input  value="{{ \Route::current()->getName() == 'jurusan.edit' ? $jurusan->nama_jurusan : '' }}"
                        type="text" name="nama_jurusan" id="nama_jurusan" class="form-control" placeholder="Nama Jurusan" aria-describedby="nama_jur">
                <small id="nama_jur" class="text-muted"></small>
            </div>
            <div class="form-group">
                <label for="jenis_prodi">Jenis Prodi</label>
                <input  value="{{ \Route::current()->getName() == 'jurusan.edit' ? $jurusan->jenis_prodi : '' }}"
                        type="text" name="jenis_prodi" id="jenis_prodi" class="form-control" placeholder="Jenis Prodi" aria-describedby="jenis_prod">
                <small id="jenis_prod" class="text-muted"></small>
            </div>
            <button class="btn btn-white border-primary">Submit</button>
        </form>
@endsection
