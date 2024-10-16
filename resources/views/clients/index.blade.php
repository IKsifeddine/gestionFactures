<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des clients</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex flex-col items-center py-10">
    <div class="w-full max-w-3xl bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Liste des clients</h1>
        
        <div class="text-right mb-6">
            <a href="{{ route('clients.create') }}"
               class="bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
               Ajouter un client
            </a>
        </div>

        <ul class="divide-y divide-gray-200">
            @foreach ($clients as $client)
                <li class="py-4 flex justify-between items-center">
                    <span class="text-gray-700 font-medium">{{ $client->nom }}</span>
                    <span class="text-gray-500">{{ $client->email }}</span>
                </li>
            @endforeach
        </ul>
    </div>
</body>

</html>
