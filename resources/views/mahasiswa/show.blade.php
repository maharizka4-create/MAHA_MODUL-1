@extends('layouts.app')

@section('judul', 'Detail Mahasiswa')

@section('konten')

<h1>Detail Mahasiswa</h1>

<p>NIM: {{ $mhs['nim'] }}</p>
<p>Nama: {{ $mhs['nama'] }}</p>
<p>Program Studi: {{ $mhs['prodi'] }}</p>
<p>Angkatan: {{ $mhs['angkatan'] }}</p>
<p>Status: {{ $mhs['status'] }}</p>

<a href="{{ route('mahasiswa.index') }}">← Kembali ke daftar</a>

@endsection