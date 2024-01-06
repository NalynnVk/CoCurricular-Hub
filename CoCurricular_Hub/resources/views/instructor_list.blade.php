<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .header {
            background-color: #343a40;
            color: #ffffff;
            padding: 2rem;
            margin-bottom: 2rem;
            text-align: center;
        }

        h1 {
            color: #343a40;
            font-size: 28px;
            margin-bottom: 20px;
            text-align: center;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
        }

        .add-button {
            margin-top: 1rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f5f5f5;
        }

        td {
            background-color: #fff;
        }

        .btn {
            padding: 6px 12px;
        }

        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
    </style>

</head>

<body>
    @extends('layouts.app')

    @section('content')
        <!-- Creative header -->
        <div class="header">
            <div class="container">
                <h1 class="display-4">🎓 Module Management 📚</h1>
                <p class="lead">Explore and manage module information with ease</p>
            </div>
        </div>

        <div class="container">
            <!-- Alert message -->
            @if (session('success'))
                <div class="alert alert-primary" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <div class="row">
                <!-- Add Student button -->
                <div class="col-12 text-end add-button">
                    <a href="{{ url('/module-instructor/create') }}" class="btn btn-primary">Create Module</a>
                </div>

                <!-- Table styling -->
                <div class="col-12">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Venue</th>
                                <th>Schedule</th>
                                <th>Actions</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($modules as $module)
                                <tr>
                                    <td>{{ $module->id }}</td>
                                    <td>{{ $module->title }}</td>
                                    <td>{{ $module->description }}</td>
                                    <td>{{ $module->venue }}</td>
                                    <td>{{ $module->schedule }}</td>
                                    <td><a href="module-instructor/{{ $module->id }}/edit"
                                            class="btn btn-warning">Edit</a></td>
                                    <td><a href="module-instructor/{{ $module->id }}/delete"
                                            onclick="return confirm('Are You Sure')" class="btn btn-danger">Delete</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
