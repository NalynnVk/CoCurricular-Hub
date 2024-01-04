<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Details</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}

    <!-- Add your additional styles here -->
    <style>
        body {
            font-family: 'Kanit', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: #333;
            color: white;
            padding: 1em;
            text-align: center;
        }

        main {
            padding: 2em;
        }

        .course-details {
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .course-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .course-info {
            padding: 2em;
        }

        .btn-back {
            margin-top: 20px;
        }
    </style>
</head>
<script>
    @if(session('error'))
        // Display JavaScript alert for error messages
        alert("{{ session('error') }}");
    @endif
</script>
<body>
    @extends('layouts.app')

    @section('content')
        <header>
            <h1>Course Details</h1>
        </header>

        <main>
            <div class="container">
                <div class="course-details">
                    {{-- <img class="course-image" src="{{ $module->image_url }}" alt="{{ $module->title }}"> --}}
                    <div class="course-info">
                        <h2>{{ $module->title }}</h2>
                        <p>{{ $module->description }}</p>
                        <p>Venue: {{ $module->venue }}</p>
                        <p>Schedule: {{ $module->schedule }}</p>
                        <!-- Add more details as needed -->
                    </div>
                </div>

                <form action="{{ route('enroll-module', $module->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Enroll</button>
                </form>
            </div>
        </main>

        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script> --}}
    @endsection
</body>

</html>
