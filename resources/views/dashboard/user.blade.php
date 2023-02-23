@extends('dashboard.layouts.main')
@section('title', 'User')
@section('content')
<h1>User</h1>
<div class="table-responsive">
    <table class="table rounded">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">address</th>
                <th scope="col">No Handphone</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            {{-- <php $i=1 ?> tambah tanda tanya di < --}} @foreach ( $data as $data ) <tr>
                    {{-- <th scope="row">{{$i++}}</th> --}}
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email}}</td>
                    <td>{{ $data->address}}</td>
                    <td>{{ $data->no_hp}}</td>
                    <td class="text-center">
                        <a href="/user/{{ $data->id }}/edit" class="btn btn-primary"> <i
                                class="bi bi-pencil-square"></i></a>
                        <form action="/user/{{ $data->id }}" method="post" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger"
                                onclick="return confirm('Apakah anda yakin ingin menghapus postingan ini?')"><i
                                    class="bi bi-trash-fill"></i></button>
                        </form>
                    </td>
                    </tr>
                    @endforeach
        </tbody>
    </table>
</div>

    {{-- <form action="{{ route('dashboard.update',$data->id) }}" method="post" enctype="multipart/form-data">
        @csrf

        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control" id="nama" aria-describedby="nama">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

    </form> --}}

    @endsection
