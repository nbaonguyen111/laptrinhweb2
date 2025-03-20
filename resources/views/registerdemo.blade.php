@extends('main')
@section ('title','Đăng Ký')
@section('content')
<div class="container col-md-5 d-flex justify-content-center border border-3 mt-4">
            <form action="">
                <h1>Màn Hình Đăng Ký</h1>
                <div class="col-md-10">
                    <label for="name" class="form-label">Username</label>
                    <input type="text" class="form-control" name="name">
                </div>
        
                <div class="col-md-10">
                    <label for="password" class="form-label">Mật Khẩu</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="col-md-10">
                    <label for="repassword" class="form-label">Nhập Lại Mật Khẩu</label>
                    <input type="password" class="form-control" name="repassword">
                </div>
        
                <div class="col-md-10">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email">
                </div>
        
                <span class="ms-5 me-4 mt-5 d-inline-block text-primary">Đã có tài khoản</span>
                <button class="mb-3 btn btn-primary" type="submit">Đăng Ký</button>
            </form>
        </div>
        
    </div>

@endsection
