@extends('layout.main')

@section('title', '| Materi')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">WELLCOME TO KURSUS MVP</h1>
                <a href="add-materi" class="btn btn-dark">Add Materi</a>
            </div>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Kursus</th>
                <th>Tema</th>
                <th>Materi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($materiList as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        @if ($item->kursus)
                            {{ $item->kursus->judul_kursus }}
                        @else
                            data Tidak Ditemukan
                        @endif
                    </td>
                    <td>{{ $item->judul_materi }}</td>
                    <td>{{ $item->isi }}</td>
                    <td>
                        <a href="kursus-view/{{ $item->id }}">Edit</a>
                        <a href="kursus-view/{{ $item->id }}">Delete</a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
