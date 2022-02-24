@extends('layouts/app')

@section('judul', 'Books Manager Page')

@section('konten')
    <div class="container">
        <div class="col-md-8 table-wrapper">
        <h3><i class="uil uil-cog me-1"></i>Manage our books</h3>
        <h5>Add, Edit, and Delete our book archive here</h5>
        <hr>
        <a href="{{ url('/library/add') }}" class="btn btn-dark btn-sm mb-2"><i class="uil uil-plus-circle me-1"></i>Add Books</a>
        @if (session('status_success'))
            <div class="alert alert-info" role="alert">
                {{ session('status_success') }}
            </div>
        @endif
            <table class="table table-info">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Pages</th>
                    <th>Year Released</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->writer }}</td>
                        <td>{{ $book->pages }}</td>
                        <td>{{ $book->year }}</td>
                        <td><a href="{{ url('/library/' . $book->id) }}" class="btn btn-primary"><i class="uil uil-wrench"></i></a> <a href="{{ url('/library/' . $book->id) }}" class="btn btn-danger" onclick="event.preventDefault();document.getElementById('delete-form-{{ $book->id }}').submit();"><i class="uil uil-trash-alt"></i><form id="delete-form-{{ $book->id }}" action="{{ url('/library/' . $book->id) }}" method="POST" style="display: none;">@csrf @method('DELETE')</form></a></td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
@endsection