@extends('dashboard.layouts.main')
@section('title', 'Book')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb mt-4">
        <div class="card shadow p-3 mb-5">
            <div class="card-header ">
                <h2>Data Project
                </h2>
                @if (session('berhasil'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('berhasil') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            </div>
            <div class="table-responsive col-lg-12">
                {{-- <a href="{{ route ('admin.pdf')}}" class="btn btn-danger mb-3 mt-5 mb-4"> pdf </a>
                <a href="{{ route ('admin.create')}}" class="btn btn-success mb-3 mt-5 mb-4"> Excel </a> --}}
                <table class="table table-striped table-dark table-sm table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">No</th>
                            <th scope="col">Book Code</th>
                            <th scope="col">Title</th>
                            <th scope="col">Status</th>
                            <th scope="col">Category</th>
                            <th scope="col">Cover</th>
                            <th scope="col" style="width: 150px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            @foreach ($book as $book)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">{{ $book->book_code }}</td>
                            <td class="text-center">{{ $book->title }}</td>
                            <td class="text-center">{{ $book->status }}</td>
                            {{-- <td class="text-center">{{ $book->category->name }}</td> --}}
                            <td>
                                @if ($book->cover)
                                <img src="{{ asset('/storage/' . $book->cover) }}"
                                    {{-- alt=" {{ $book->category->name }}" --}}
                                    style="max-height: 80px; width: 100%; overflow: hidden">

                                @else
                                <br>
                                {{-- <img src="https://source.unsplash.com/1200x400/?{{ $book->category->name }}"
                                    width="200px" alt="{{ $book->category->name }}"> --}}
                                @endif

                            </td>
                            {{-- <td class="">
                                <form onsubmit="return confirm('apa anda yakin?');"
                   .                 action="{{ route('user.destroy', $book->id) }}" method="POST">
                                    @csrf
                                    @method('Delete')
                                    <button type="submit" class="badge bg-danger border-0 btn-delete" id="hapus"><i
                                            class="bi bi-trash"></i></button>
                                </form>
                                <a href="{{ route('user.show', $book->id) }}"
                                    class="badge bg-info text-dark me-1"><i class="bi bi-eye"></i></a>
                                <a href="{{ route('user.edit', $book->id) }}"
                                    class="badge bg-info text-dark me-1"><i class=""></i></a> --}}
                                {{-- @include('dashboard.edit') --}}

                            {{-- </td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
