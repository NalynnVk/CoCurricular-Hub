<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Co-curricular Modules</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        <style>body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
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
                                <a href="{{ url("/module/{$module->id}") }}" class="btn btn-primary btn-details">View
                                    Details</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </main>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
        </script>
    @endsection
</body>

</html>
