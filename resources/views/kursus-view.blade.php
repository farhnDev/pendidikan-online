@extends('layout.main')

@section('title', '| Materi')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                <h1 class="text-center">Materi Kursus {{ $Kursus->judul_kursus }}</h1>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                @foreach ($Kursus->materis as $materi)
                                    <p>Judul Materi: <strong>{{ $materi->judul_materi }} <br> </strong>
                                        Dosen: <strong>
                                            @if ($materi->pengajar)
                                                {{ $materi->pengajar->nama_pengajar }}
                                            @else
                                                Pengajar Tidak Ditemukan
                                            @endif
                                    </p></strong>
                                    {{ $materi->isi }}
                                @endforeach
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
            </div>
        </div>
    </div>

    <a href="/kursus" class="btn btn-dark">
        <- kembali </a>

        @endsection
