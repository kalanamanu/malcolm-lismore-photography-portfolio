@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/adminhome.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Malcolm Lismore Photography</title>
</head>
<body>
<header>
    <h1 class="main">Admin Dashboard</h1>
    <p>Malcolm Lismore Photography</p>
  </header>
  <body>
    

    <section class="p-3">

        <div class="row">
            <div class="col-12">
                <button class="btn btn-primary newUser" data-bs-toggle="modal" data-bs-target="#userForm">Add Image</button>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-hover mt-3 text-center table-bordered">

                    <thead>
                        <tr>
                            <th>Image ID</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody id="data">
                @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->image_id }}</th>
                    <td>{{ $post->image }}
                        <img src="{{ asset($post->image) }}" width= '150' height='100' class="img img-responsive"/>
                    </td>
                    <td>{{ $post->category }}</td>
                    <td>
                        <a href="{{route('edit', $post->id)}}" class="btn btn-primary btn-sm" data-bs-target="#userUpdate">Update</a>
                        <a href="{{ route('delete', $post->id)}}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>

                </table>
            </div>
        </div>

    </section>


    <!--add btn Form-->
    <div class="modal fade" id="userForm">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Add an Image</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <form action="{{ route('posts.store')}}" id="myForm" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="inputField">
                        <div>
                                <label for="image_id">Image:</label>
                                <input type="file" name="image" id="imgInput">
                        </div>
                            <div>
                                <label for="image_id">Image ID:</label>
                                <input type="text" name="image_id" id="id" required>
                            </div>
                            <div>
                                <label for="category">Category:</label>
                                <input type="text" name="category" id="category" required>
                            </div>
                           
                        </div>

                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Close</button>
                    <button type="submit" form="myForm" class="btn btn-primary btn-sm" submit">Add</button>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
@endsection
