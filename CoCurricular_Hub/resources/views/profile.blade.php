<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            width: 400px;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #007BFF;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <form id="profileForm">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="matricId">Matric ID:</label>
        <input type="text" id="matricId" name="matricId" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phoneNumber">Phone Number:</label>
        <input type="tel" id="phoneNumber" name="phoneNumber" required>

        <button type="button" onclick="saveProfile()">Save Profile</button>
    </form>

    <script>
        // Function to save the profile information
        function saveProfile() {
            const name = document.getElementById('name').value;
            const matricId = document.getElementById('matricId').value;
            const email = document.getElementById('email').value;
            const phoneNumber = document.getElementById('phoneNumber').value;

            // You can send this data to the server for further processing
            // For simplicity, we'll just log the data to the console here
            console.log('Name:', name);
            console.log('Matric ID:', matricId);
            console.log('Email:', email);
            console.log('Phone Number:', phoneNumber);
        }
    </script>

</body>

</html>
