@extends('layouts.app')

@section('judul', 'Daftar Mahasiswa')

@section('konten')

<h1>Daftar Mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Program Studi</th>
            <th>Angkatan</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($mahasiswa as $index => $mhs)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $mhs['nim'] }}</td>
                <td>{{ $mhs['nama'] }}</td>
                <td>{{ $mhs['prodi'] }}</td>
                <td>{{ $mhs['angkatan'] }}</td>
                <td>{{ $mhs['status'] }}</td>
                <td>
                    <a href="{{ route('mahasiswa.show', $mhs['nim']) }}">
                        Detail
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection