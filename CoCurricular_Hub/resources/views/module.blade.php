<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Co-curricular Modules</title>
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
        }

        .module-card:hover {
            transform: scale(1.05);
        }

        .module-image {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .module-info {
            padding: 1em;
        }
    </style>
</head>
@extends('layouts.app')
@section('content')

    <body>
        <header>
            <h1>Co-curricular Modules</h1>
        </header>

        <main>
            <div class="module-container" id="moduleContainer">
                <!-- Modules will be dynamically added here -->
            </div>
        </main>

        <script>
            // Sample data for modules (replace this with actual data from the server)
            const modulesData = [{
                    id: 1,
                    title: 'Module 1',
                    description: 'Description for Module 1',
                    imageUrl: 'https://via.placeholder.com/300',
                },
                {
                    id: 2,
                    title: 'Module 2',
                    description: 'Description for Module 2',
                    imageUrl: 'https://via.placeholder.com/300',
                },
                {
                    id: 3,
                    title: 'Module 3',
                    description: 'Description for Module 3',
                    imageUrl: 'https://via.placeholder.com/300',
                },
                // Add more modules as needed
            ];

            // Function to render modules on the page
            function renderModules() {
                const moduleContainer = document.getElementById('moduleContainer');

                modulesData.forEach(module => {
                    const moduleCard = document.createElement('div');
                    moduleCard.classList.add('module-card');
                    moduleCard.innerHTML = `
                <img class="module-image" src="${module.imageUrl}" alt="${module.title}">
                <div class="module-info">
                    <h2>${module.title}</h2>
                    <p>${module.description}</p>
                    <button onclick="viewModuleDetails(${module.id})">View Details</button>
                </div>
            `;
                    moduleContainer.appendChild(moduleCard);
                });
            }

            // Function to view module details (replace this with actual logic)
            function viewModuleDetails(moduleId) {
                const selectedModule = modulesData.find(module => module.id === moduleId);
                if (selectedModule) {
                    alert(`Module: ${selectedModule.title}\nDescription: ${selectedModule.description}`);
                    // Add logic for redirection or enrollment here
                }
            }

            // Initial rendering of modules
            renderModules();
        </script>
    @endsection
</body>

</html>
