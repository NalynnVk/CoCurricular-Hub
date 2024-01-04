<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Data</title>

    <!-- Use the latest Bootstrap version -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}

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
            padding: 1rem;
            /* border-radius: 0 0 1rem 1rem; */
            margin-bottom: 2rem;
            text-align: center;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }

        .lead {
            font-size: 1.25rem;
            margin-bottom: 2rem;
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
                <h1 class="display-4">🎓 Enrolled Modules 📚</h1>
                <p class="lead">Explore and manage your enrolled modules</p>
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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($enrolledModules as $module)
                                <tr>
                                    <td>{{ $module->id }}</td>
                                    <td>{{ $module->title }}</td>
                                    <td>{{ $module->description }}</td>
                                    <td>{{ $module->venue }}</td>
                                    <td>{{ $module->schedule }}</td>
                                    <td>
                                        <form action="{{ route('unenroll', ['id' => $module->id]) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Unenroll</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        </div>
    @endsection

</body>

</html>
