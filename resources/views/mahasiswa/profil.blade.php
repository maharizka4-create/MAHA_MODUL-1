@extends('layouts.app')

@section('judul', 'Profil Mahasiswa')

@section('konten')

<h1>Profil Mahasiswa</h1>

<p>Nama: {{ $nama }}</p>
<p>NIM: {{ $nim }}</p>
<p>Program Studi: {{ $prodi }}</p>
<p>Angkatan: {{ $angkatan }}</p>

@endsection