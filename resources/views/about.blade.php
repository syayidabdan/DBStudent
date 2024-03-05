@extends('layout.main')

    @section('navbar')
        {{-- account start --}}
        <form action="/store" method="POST">
         @csrf
            <div class="p-5">
                <label class="input input-bordered flex items-center gap-2 mb-3 mt-5">
                    Nama
                    <input type="text" class="grow" name="nama" required placeholder="Daisy" />
                </label>
                <label class="input input-bordered flex items-center gap-2 mb-3">
                    Kesalahan
                    <input type="text" class="grow" name="kesaahan" required placeholder="daisy@site.com" />
                </label>
                <label class="input input-bordered flex items-center gap-2 mb-3">
                    Hukuman
                    <input type="text" class="grow" name="hukuman" required placeholder="daisy@site.com" />
                </label>
                <button class="btn btn-primary">Add</button>
            </div>
        </form>
        
        {{-- account end --}}
    @endsection