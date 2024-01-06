<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
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
        #calendar {
            max-width: 900px;
            margin: 20px auto;
        }
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

                <!-- FullCalendar integration -->
                <div id="calendar"></div>

                <!-- Add more content and features as needed -->
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>

        <script>
            $(document).ready(function () {
                // Fetch enrolled modules from the server
                var enrolledModules = <?php echo json_encode($enroll_module); ?>;

                // Prepare events array for FullCalendar
                var events = enrolledModules.map(function (enrollment) {
                    return {
                        title: enrollment.module.title,
                        start: enrollment.module.schedule,
                        description: enrollment.module.description,
                    };
                });

                // Initialize FullCalendar
                $('#calendar').fullCalendar({
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay'
                    },
                    events: events,
                    eventClick: function (event) {
                        // Handle event click, you can show module details here
                        alert('Module: ' + event.title + '\nDescription: ' + event.description);
                    }
                });
            });
        </script>
    @endsection
</body>

</html>
