<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
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
            <!-- Creative header -->
            <div class="header">
                <div class="container">
                    <h1 class="display-4">🎓 Profile 📚</h1>
                    <p class="lead">Explore and manage profile information with ease</p>
                </div>
            </div>
        <div class="container profile-container">
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

    @endsection
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
