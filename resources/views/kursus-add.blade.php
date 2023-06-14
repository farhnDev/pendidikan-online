@extends('layout.main')

@section('title', '| New Kursus')

@section('content')
    <div class="mt-5 col-8 m-auto">
        <form action="kursus" method="POST">
            @csrf
            <div class="mb-3">
                <label for="judul_kursus">Nama Kursus:</label>
                <input type="text" class="form-control" id="judul_kursus" name="judul_kursus" required>
            </div>

            <div class="mb-3">
                <label for="tema">Tema:</label>
                <input type="text" class="form-control" id="tema" name="tema" required>
            </div>

            <div class="input-group mb-3">
                <label class="input-group" for="thumbnail">Thumbnail:</label>
                <input type="file" class="form-control" id="thumbnail" name="thumbnail">
            </div>


            <div class="mb-3">
                <label for="pengajar_id">Pengajar</label>
                <select class="form-select" id="pengajar_id" aria-label="Default select example" name="pengajar_id">
                    <option value="" disabled selected>Select</option>
                    @foreach ($guru as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_pengajar }}</option>
                    @endforeach
                </select>
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
