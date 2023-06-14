@extends('layout.main')

@section('title', '| New Materi')

@section('content')
    <div class="mt-5 col-8 m-auto">
        <form action="materi" method="POST">
            @csrf
            <div class="mb-3">
                <label for="kursus_id">Kursus</label>
                <select class="form-select" id="kursus_id" aria-label="Default select example" name="kursus_id">
                    <option value="" disabled selected>Select</option>
                    @foreach ($kursus as $item)
                        <option value="{{ $item->id }}">{{ $item->judul_kursus }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="judul_materi">Judul Materi:</label>
                <input type="text" class="form-control" id="judul_materi" name="judul_materi" required>
            </div>

            <div class="mb-3">
                <label for="is">Isi:</label>
                <input type="text" class="form-control" id="isi" name="isi" required>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-dark">save</button>
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
