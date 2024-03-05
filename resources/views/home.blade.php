@extends('layout.main')

    @section('navbar')

    @php
        $no = 1;
    @endphp

    
    <div class="mt-5 p-2">
        <a href="/about" class="btn btn-outline btn-accent">Add Data</a>
    </div>
        <div class="overflow-x-auto">
            <table class="table">
            <!-- head -->
            <thead>
                <tr>
                <th></th>
                <th>Nama</th>
                <th>Kesalahan</th>
                <th>Hukuman</th>
                </tr>
            </thead>
            <tbody>
                <!-- row 1 -->
                @foreach($student as $s )
                <tr  class="hover">
                    {{-- untuk memanggil nya sesuaikan sama fieldnya --}}
                    <th>{{ $no }}</th>
                    <td>{{ $s ->nama }}</td>
                    <td>{{ $s ->kesaahan }}</td>
                    <td>{{ $s ->hukuman }}</td>
                    <td class="flex gap-2"><a href="/{{ $s->id }}/edit" class="btn btn-outline btn-primary">Edit</a>
                        <form action="/update/{{ $s->id }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-error">Delete</button>
                        </form>
                    </td>
                </tr>
                @php
                    $no++;
                @endphp
                @endforeach
            </tbody>
            </table>
        </div>
    @endsection