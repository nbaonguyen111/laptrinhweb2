@extends('main')
@section ('title','Danh Sách User')
@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">Danh Sách User</h2>
    <table class="table table-bordered  text-center">
        <thead class="table">
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Email</th>
                <th>Thao Tác</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>UPVH</td>
                <td>abc@gmail.com</td>
                <td>
                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                    <a href="#" class="btn btn-sm btn-primary">View</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>NBN</td>
                <td>abc@gmail.com</td>
                <td>
                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                    <a href="#" class="btn btn-sm btn-primary">View</a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>NBN</td>
                <td>abc@gmail.com</td>
                <td>
                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                    <a href="#" class="btn btn-sm btn-primary">View</a>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>NBN</td>
                <td>abc@gmail.com</td>
                <td>
                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                    <a href="#" class="btn btn-sm btn-primary">View</a>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>NBN</td>
                <td>abc@gmail.com</td>
                <td>
                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                    <a href="#" class="btn btn-sm btn-primary">View</a>
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>NBN</td>
                <td>abc@gmail.com</td>
                <td>
                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                    <a href="#" class="btn btn-sm btn-primary">View</a>
                </td>
            </tr>
            <tr>
                <td>7</td>
                <td>NBN</td>
                <td>abc@gmail.com</td>
                <td>
                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                    <a href="#" class="btn btn-sm btn-primary">View</a>
                </td>
            </tr>
            <tr>
                <td>8</td>
                <td>NBN</td>
                <td>abc@gmail.com</td>
                <td>
                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                    <a href="#" class="btn btn-sm btn-primary">View</a>
                </td>
            </tr>
            <tr>
                <td>9</td>
                <td>NBN</td>
                <td>abc@gmail.com</td>
                <td>
                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                    <a href="#" class="btn btn-sm btn-primary">View</a>
                </td>
            </tr>
          
            <tr>
                <td>10</td>
                <td>SSSSS</td>
                <td>abc@gmail.com</td>
                <td>
                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                    <a href="#" class="btn btn-sm btn-primary">View</a>
                </td>
            </tr>
        </tbody>
    </table>
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item "><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>
@endsection
