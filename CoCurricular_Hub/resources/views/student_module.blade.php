<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Co-curricular Modules</title>
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

        .container {
            max-width: 900px;
            margin: 0 auto;
        }

        h1 {
            color: #343a40;
            font-size: 28px;
            margin-bottom: 20px;
            text-align: center;
        }

        .module-container {
            display: flex;
            flex-wrap: wrap;
        }

        .module-card {
            width: calc(33.33% - 20px);
            margin: 10px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.2s;
            cursor: pointer;
            display: flex;
            flex-direction: column;
        }

        .module-card:hover {
            transform: scale(1.05);
        }

        .module-image {
            width: 100%;
            height: 200px;
            /* Adjusted height for better visibility */
            object-fit: cover;
        }

        .module-info {
            flex-grow: 1;
            padding: 1em;
        }

        .btn-details {
            width: 100%;
            margin-top: auto;
            /* Push the button to the bottom */
        }
    </style>
</head>
{{-- <script>
    @if (session('error'))
        // Display JavaScript alert for error messages
        alert("{{ session('error') }}");
    @endif
</script> --}}

<body>
    @extends('layouts.app')

    @section('content')
        <div class="header">
            <div class="container">
                <h1 class="display-4">🎓 Co-curricular Modules 📚</h1>
                <p class="lead">Explore and manage your enrolled modules</p>
            </div>
        </div>

        <main>
            <div class="container">
                <div class="module-container" id="moduleContainer">
                    <!-- Modules will be dynamically added here -->
                    @foreach ($modules as $module)
                        <div class="module-card">
                            {{-- <img class="module-image" src="{{ $module->image_url }}" alt="{{ $module->title }}"> --}}
                            <div class="module-info">
                                <h2>{{ $module->title }}</h2>
                                <p>{{ $module->description }}</p>
                                {{-- <p>Venue: {{ $module->venue }}</p>
                                <p>Schedule: {{ $module->schedule }}</p> --}}
                            </div>
                            <div class="btn-details-container">
                                <!-- Add logic for redirection or enrollment here -->
                                <a href="{{ url("/student-module-detail/{$module->id}") }}"
                                    class="btn btn-primary btn-details">View
                                    Details</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </main>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @endsection
</body>

</html>
