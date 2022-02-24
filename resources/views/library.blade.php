@extends('layouts/app')

@section('judul', 'Library Page')

@section('konten')
    <div class="container">
        <h3><i class="uil uil-book-open me-1"></i>Our Books</h3>
        <h5>Here are the books stored in our archive</h5>
        <hr>
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