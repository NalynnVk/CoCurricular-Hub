<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Details</title>
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
    @if (session('error'))
        // Display JavaScript alert for error messages
        alert("{{ session('error') }}");
    @endif
</script>

<body>
    @extends('layouts.app')

    @section('content')
        <div class="header">
            <div class="container">
                <h1 class="display-4">🎓 Module Management 📚</h1>
                <p class="lead">Explore and manage module information with ease</p>
            </div>
        </div>
        <main>
            <div class="container">
                <script>
                    @if (session('success'))
                        // Display JavaScript alert for success messages
                        alert("{{ session('success') }}");
                    @endif
                </script>

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

                <form action="{{ route('enroll', $module->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Enroll</button>
                </form>
            </div>
        </main>
    @endsection
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
