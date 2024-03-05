@extends('layout.main')

    @section('navbar')
        {{-- form start --}}
        <form action="/update/{{ $student->id }}" method="POST">
         @csrf
         @method('put')
            <div class="p-5">
                <label class="input input-bordered flex items-center gap-2 mb-3 mt-5">
                    Nama
                    <input type="text" class="grow" name="nama" value="{{ $student->nama }}" required placeholder="Daisy" />
                </label>
                <label class="input input-bordered flex items-center gap-2 mb-3">
                    Kesalahan
                    <input type="text" class="grow" name="kesaahan" value="{{ $student->kesaahan }}" required placeholder="daisy@site.com" />
                </label>
                <label class="input input-bordered flex items-center gap-2 mb-3">
                    Hukuman
                    <input type="text" class="grow" name="hukuman" value="{{ $student->hukuman }}" required placeholder="daisy@site.com" />
                </label>
                <button class="btn btn-primary">Okay</button>
            </div>
        </form>
        
        {{-- form end --}}
    @endsection