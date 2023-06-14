@extends('layout.main')

@section('title', '| Regist')

@section('content')

    <div class="mt-5 col-8 m-auto">
        <form action="">
            @csrf
            <div class="mb-3">
                <label for="nama_lengkap">Nama Lengkap:</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"required>
            </div>

            <div class="mb-3">
                <label id="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>

            <div class="mb-3">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="kursus_id">Kursus</label>
                <select class="form-select" id="kursus_id" aria-label="Default select example" name="kursus_id"required>
                    <option value="" disabled selected>Select</option>
                    @foreach ($kursus as $k)
                        <option value="{{ $k->id }}">{{ $k->judul_kursus }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <button type="button" class="btn btn-dark" id="myButton" onclick="myButton()">Back</button>
                <button type="button" class="btn btn-dark" onclick="myRegis()">Daftar</button>
            </div>

        </form>
    </div>

    {{-- <style>
    </style> --}}
    {{-- <script>
        var button = document.getElementById('myButton');
        button.addEventListener('click', function() {
            window.location.href = '/kursus-view';
        });
    </script> --}}
@endsection
