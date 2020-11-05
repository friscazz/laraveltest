@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
              <table class="table table-stripe mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>genre</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bukus as $buku)
                <tr>
                    <td>{{ ++$no }}</td>
                    <td>{{ $buku->judul }}</td>
                    <td>{{ $buku->penulis }}</td>
                    <td>{{ $buku->genre->genres}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        </div>
    </div>
</div>
@endsection
