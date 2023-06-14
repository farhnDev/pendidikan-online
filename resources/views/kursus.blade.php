@extends('layout.main')

@section('title', '| Kursus')

@section('content')
    {{-- {{ $kursus }} --}}
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">WELLCOME TO KURSUS MVP</h1>
                <a href="kursus-add" class="btn btn-dark">Add Kursus</a> <br> <br>
            </div>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Kursus</th>
                <th>Tema</th>
                <th>Teacher</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kursus as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->judul_kursus }}</td>
                    <td>{{ $item->tema }}</td>
                    <td>
                        @if ($item->pengajar)
                            {{ $item->pengajar->nama_pengajar }}
                        @else
                            Pengajar Tidak Ditemukan
                        @endif
                    </td>
                    <td><a href="kursus-view/{{ $item->id }}" class="btn btn-primary">View</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="pendaftaraan" class="btn btn-dark float-end">daftarYuk</a>
    <style>
        .container {
            margin-top: 20px;
        }

        .table {
            margin-top: 20px;
        }

        th {
            width: 25;
        }
    </style>
@endsection
