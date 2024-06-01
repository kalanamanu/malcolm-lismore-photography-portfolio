@extends('layouts.app')

@section('content')
<!--Update btn Form-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update an Image</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            width: 50%;
            max-width: 600px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            margin: auto;
        }

        .modal-header, .modal-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-title {
            margin: 0;
        }

        .btn-close {
            background: none;
            border: none;
            font-size: 20px;
            cursor: pointer;
        }

        .inputField {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin: 20px 0;
        }

        .inputField label {
            margin-bottom: 5px;
        }

        .inputField input[type="file"],
        .inputField input[type="text"] {
            padding: 8px;
            width: 100%;
            box-sizing: border-box;
        }

        .btn {
            padding: 8px 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
        }

        .btn-danger {
            background-color: #dc3545;
            color: white;
        }

        .btn-sm {
            padding: 5px 10px;
        }
    </style>
</head>
<body>

<div id="userUpdate" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Update an Image</h4>
            
        </div>
        <div class="modal-body">
            <form action="{{ route('posts.update', $post->id)}}" id="myForm" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="inputField">
                    <div>
                        <label for="imgInput">Image:</label>
                        <input type="file" name="image" id="imgInput">
                    </div>
                    <div>
                        <label for="id">Image ID:</label>
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
            <button type="button" class="btn btn-danger btn-sm" onclick="closeModal()">Close</button>
            <button type="submit" form="myForm" class="btn btn-primary btn-sm">Update</button>
        </div>
    </div>
</div>

<script>
    function openModal() {
        document.getElementById('userUpdate').style.display = 'flex';
    }

    function closeModal() {
        document.getElementById('userUpdate').style.display = 'none';
    }

    // Open modal on page load (optional)
    window.onload = openModal;
</script>

</body>
</html>

    @endsection