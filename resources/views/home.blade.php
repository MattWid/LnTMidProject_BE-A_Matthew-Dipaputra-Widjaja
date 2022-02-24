@extends('layouts/app')

@section('judul', 'Musbrary Page')

@section('konten')
    <div class="container bg-dark text-white banner">
        <h1>Welcome to our Musbrary</h1>
        <p>Giving our best for your geek needs</p>
        <a href="#" class="btn btn-warning">Need Help?</a>
    </div>

    <div class="container">
        <div class="row">
            @foreach($books as $book)
                <div class="col-md-4">
                    <div class="col-md-12 bg-info book-konten mt-4">
                        <h1 class="judul">{{ $book->title }}</h1>
                        <span class="penulis badge bg-dark">{{ $book->writer }}</span><br>
                        <span class="halaman">Total Pages : {{ $book->pages }}</span><br>
                        <span class="tahun">Publication Year : {{ $book->year }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection