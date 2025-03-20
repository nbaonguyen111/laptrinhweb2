@extends('main')
@section ('title','Đăng Nhập')
@section('content')
<div class="container col-md-5 d-flex justify-content-center border border-3 mt-4">
            <form action="">
                <h1>Màn Hình Cập Nhật</h1>
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
               
                
                <button class="mb-3 btn btn-primary mt-3" type="submit">Lưu</button>
            </form>
        </div>
        
    </div>
@endsection
