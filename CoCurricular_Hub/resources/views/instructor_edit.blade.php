<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School System Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        h1 {
            color: #333;
            font-size: 28px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-size: 14px;
            color: #666;
            text-align: left;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
        }

        input[type="text"]::placeholder {
            color: #999;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>
    <div class='container'>
        @if (session('success'))
            <div class="alert alert-primary" role="alert">
                {{ session('success') }}
            </div>
        @endif
    </div>
    <form action="/module-instructor/{{$modules->id}}/update" method="POST">
        {{ csrf_field() }}
        @method('PUT')
        <h1>Module Information</h1>
        <label for="title">Title:</label>
        <input type="text" id="title" name = "title" placeholder="Enter the module title" class="form-control" id="exampleFormControlInput1" value="{{$modules->title}}">

        <label for="description">Description:</label>
        <input type="text" id="description" name = "description" placeholder="Enter the module description" class="form-control" id="exampleFormControlInput1" value="{{$modules->description}}">

        <label for="venue">Venue:</label>
        <input type="text" id="venue" name = "venue" placeholder="Enter the module venue" class="form-control" id="exampleFormControlInput1" value="{{$modules->venue}}">

        <label for="schedule">Schedule:</label>
        <input type="text" id="schedule" name = "schedule" placeholder="Enter the module schedule" class="form-control" id="exampleFormControlInput1" value="{{$modules->schedule}}">

        <!-- Add flatpickr date picker to the schedule input -->
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script>
            flatpickr("#schedule", {
                enableTime: true,
                dateFormat: "Y-m-d H:i",
            });
        </script>

        <input type="submit" value="Submit">
    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
