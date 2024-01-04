<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Co-curricular Modules</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: white;
            padding: 1em;
            text-align: center;
        }

        main {
            padding: 1em;
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
            margin-top: auto; /* Push the button to the bottom */
        }
    </style>
</head>
{{-- <script>
    @if(session('error'))
        // Display JavaScript alert for error messages
        alert("{{ session('error') }}");
    @endif
</script> --}}
<body>
    @extends('layouts.app')

    @section('content')
        <header>
            <h1>Co-curricular Modules</h1>
        </header>

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
                                <a href="{{ url("/module/{$module->id}") }}" class="btn btn-primary btn-details">View
                                    Details</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </main>

        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script> --}}
    @endsection
</body>

</html>
