@extends('layouts.frontend')

@section('content')
    <a href="{{ URL::previous() }}" class="btn btn-white border-primary">Kembali</a>
    <h1>{{ $jurusan->nama_jurusan }}</h1>
    <p>{{ $jurusan->jenis_prodi }}</p>
@endsection
