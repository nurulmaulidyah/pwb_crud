@extends('layouts.frontend')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Jurusan</th>
                <th>Jenis Prodi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jurusan as $jur)
                <tr>
                    <td scope="row">{{ $jur->id }}</td>
                    <td>{{ $jur->nama_jurusan }}</td>
                    <td>{{ $jur->jenis_prodi }}</td>
                    <td>
                        <form action="{{ route('jurusan.destroy', $jur->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <a href="{{ route('jurusan.show', $jur->id) }}" class="btn btn-white border-warning">Lihat</a>
                            <a href="{{ route('jurusan.edit', $jur->id) }}" class="btn btn-white border-success">Edit</a>
                            <button class="btn btn-danger" onclick="return confirm('Yakin ?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
