@extends('layouts.app')

@section('judul', 'Dashboard')

@section('konten')

<h1>Dashboard</h1>

<x-kartu judul="Total Mahasiswa">
    <strong>{{ $totalMahasiswa }}</strong>

    <x-slot:footer>
        <a href="{{ route('mahasiswa.index') }}">Lihat daftar</a>
    </x-slot:footer>
</x-kartu>

<x-kartu judul="Total Aktif">
    <strong>{{ $totalAktif }}</strong>
</x-kartu>

<x-kartu judul="Total Cuti">
    <strong>{{ $totalCuti }}</strong>
</x-kartu>

<x-kartu>
    Data mahasiswa
</x-kartu>

<p>Data pada dashboard ini hanya contoh latihan.</p>

@endsection