@extends('base.Master')

@section('title','Login')

@section('body')
    <main class="form-signin d-flex align-items-center justify-content-center" style="height:100vh">
        <div class="w-50 d-flex justify-content-center border border-5 rounded p-3 text-center border-secondary bg-success">
            <form action="/admin/login" method="POST" class="d-flex flex-column">
                @csrf
                <img src="{{asset('images/assets/logo.png')}}" class="img-responsive mb-3" style="margin-left:2vw; width:17vw; height: 25vh" alt="">
                <h3>Sekolah Minggu Buddha</h3></br>
                <h3>Vihara Guna Vijaya</h3>
                <div class="form-floating mb-3" style="margin-top:3vh;">
                    <input name="userId" type="text" class="form-control" id="floatingUserId" placeholder="Username">
                    <label for="floatingUserId">User ID</label>
                </div>
                <div class="form-floating mb-5">
                    <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <button class="btn btn-primary" type="submit"><b>Login</b></button>
            </form>
        </div>
    </main>
@endsection


