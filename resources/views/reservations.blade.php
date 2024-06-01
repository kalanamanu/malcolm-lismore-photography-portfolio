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
    <h1 class="main">Your Reservations</h1>
    <p>Malcolm Lismore Photography</p>
  </header>
  <body>
    <section class="p-3">

        <div class="row">
            <div class="col-12">
               <h2>Clients Table</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-hover mt-3 text-center table-bordered">

                    <thead>
                        <tr>
                            <th>Client ID</th>
                            <th>Full name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Event Date</th>
                            <th>Plan</th>
                            <th>Event Location</th>
                        </tr>
                    </thead>

                    <tbody id="data">
                @foreach ($clients as $client)
                <tr>
                    <th scope="row">{{ $client->id }}</th>
                    <td>{{ $client->fullname }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->phone }}</td>
                    <td>{{ $client->date }}</td>
                    <td>{{ $client->plan }}</td>
                    <td>{{ $client->location }}</td>
                </tr>
                @endforeach
            </tbody>
                </table>
            </div>
        </div>

    </section>
</body>
</html>
@endsection
