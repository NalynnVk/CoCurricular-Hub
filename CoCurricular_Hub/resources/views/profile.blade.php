<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }

        header {
            background-color: #343a40;
            color: white;
            padding: 1em;
            text-align: center;
        }

        .profile-container {
            max-width: 600px;
            margin: 50px auto;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        .profile-header {
            background-color: #343a40;
            color: white;
            padding: 1em;
            text-align: center;
        }

        .profile-body {
            padding: 2em;
        }

        .profile-info-form {
            text-align: left;
            margin-bottom: 20px;
            color: #343a40;
        }

        .profile-info-form label {
            display: block;
            margin-bottom: 5px;
        }

        .profile-info-form input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .btn-edit-profile {
            width: 100%;
            margin-top: 20px;
            background-color: #343a40;
            color: white;
            border: none;
        }

        .btn-edit-profile:hover {
            background-color: #1d2124;
        }
    </style>
</head>

<body>
    @extends('layouts.app')

    @section('content')
        <div class="container profile-container">
            <div class="profile-header">
                <h1>User Profile</h1>
            </div>
            <div class="profile-body">
                <form id="profileForm" class="profile-info-form">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="{{ $user->name }}" required>

                    <label for="matric_id">Matric ID:</label>
                    <input type="text" id="matric_id" name="matric_id" value="{{ $user->matric_id }}" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="{{ $user->email }}" required>

                    <label for="phone_number">Phone Number:</label>
                    <input type="tel" id="phone_number" name="phone_number" value="{{ $user->phone_number }}" required>

                    {{-- <button type="button" class="btn btn-primary btn-edit-profile" onclick="saveProfile()">Save Profile</button> --}}
                </form>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>

        {{-- <script>
            function saveProfile() {
                // Add logic to handle form submission via AJAX or other methods
                alert('Profile saved!');
            }
        </script> --}}
    @endsection
</body>

</html>
