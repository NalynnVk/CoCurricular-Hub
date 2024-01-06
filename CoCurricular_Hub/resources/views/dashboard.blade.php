<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .header {
            text-align: center;
            background-color: #3498db;
            color: white;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .header img {
            max-width: 100%;
            height: auto;
        }

        .dashboard-container {
            margin: 20px;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }

        .dashboard-container h1 {
            color: #3498db;
        }

        .dashboard-container p {
            font-size: 15px;
            line-height: 1.6;
            color: #333;
        }

        /* Add your additional styling here */
    </style>
</head>

<body>
    @extends('layouts.app')

    @section('content')
        <div class="header">
            <img src="assets/WEBHEADER.jpg" alt="WEBHEADER">
        </div>

        <div class="container mt-4">
            <div class="dashboard-container">
                <h1 class="mb-4">Welcome, {{ Auth::user()->name }}!</h1>
                <p class="lead">SAS Co-curricular Hub is a comprehensive web-based application developed on the Laravel
                    framework, specifically designed to serve as a centralized hub for managing co-curricular activities
                    within the SMK Sultanah Asma community. Recognizing the pivotal role those co-curricular
                    activities play in the holistic development of students, this platform aims to provide an organized and
                    user-friendly solution for students to engage with, manage, and derive maximum benefit from their
                    co-curricular experiences. The project addresses the need for an efficient system to manage co-curricular activities, fostering a
                    more organized and engaging experience for SMK Sultanah Asma students. The main objectives include:
                </p>
                <p>
                    • Simplifying the module enrolment process.
                </p>
                <p>
                    • Providing a centralized dashboard for schedule management.
                </p>
                <p>
                    • Offering a seamless booking system for co-curricular modules.
                </p>
                <p>
                    • Facilitating easy access to and management of student profiles.
                </p>
                <!-- Add more content and features as needed -->
            </div>
        </div>
    @endsection
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
