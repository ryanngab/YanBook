@extends('layouts.main')
@section('title', 'Register')
<section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                         <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
                                        <form action="/register" method="post">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="nama" class="form-label">Nama</label>
                                                <input type="text" name="name" class="form-control" id="nama" aria-describedby="nama">
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" name="email" class="form-control" id="email">
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                                            </div>
                                            <div class="mb-3">
                                                <label for="no_hp" class="form-label">No Handphone</label>
                                                <input type="no_hp" name="no_hp" class="form-control" id="no_hp">
                                            </div>
                                            <div class="mb-3">
                                                <label for="address" class="form-label">Address</label>
                                                <input type="address" name="address" class="form-control" id="address">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Register</button>
                                        </form>
                                        <small class="d-block text-center mt-3">Sudah punya akun? <a href="/login">Login</a></small>
                                 </div>
                                 <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img src="https://img.freepik.com/free-vector/forms-concept-illustration_114360-4797.jpg?w=1060&t=st=1675751187~exp=1675751787~hmac=38d18b005360b32edbe5635f380d21a9b0d09270788893325f698fa3d569a74c" class="img-fluid"
                                        alt="Sample image">

                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
