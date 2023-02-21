@extends('dashboard.layouts.main')
@section('title', 'EditUser')
@section('content')
<section class="vh-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                <form action="{{ route('dashboard.update', $data->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    @method('PUT')

                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" name="name" class="form-control" id="nama" aria-describedby="nama" value="{{ old('name', $data->name ) }}">
                                    </div>
                                    {{-- <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" id="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                                    </div> --}}
                                    <div class="mb-3">
                                        <label for="no_hp" class="form-label">No Handphone</label>
                                        <input type="no_hp" name="no_hp" class="form-control" id="no_hp" value="{{ old('no_hp', $data->no_hp ) }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <textarea name="address" name="address" id="address" class="form-control">{{ old('address', $data->address ) }}</textarea>
                                    </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>


@endsection
