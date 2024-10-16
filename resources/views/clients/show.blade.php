<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du client</title>
</head>

<body>
    <h1>Détails du client</h1>
    <p><strong>Nom :</strong> {{ $client->nom }}</p>
    <p><strong>Email :</strong> {{ $client->email }}</p>
    <a href="{{ route('clients.index') }}">Retour à la liste des clients</a>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du client</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Détails du client</h1>

        <div class="mb-4">
            <p class="text-lg"><strong>Nom :</strong> <span class="text-gray-700">{{ $client->nom }}</span></p>
            <p class="text-lg"><strong>Email :</strong> <span class="text-gray-700">{{ $client->email }}</span></p>
        </div>

        <a href="{{ route('clients.index') }}"
           class="inline-block bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
           Retour à la liste des clients
        </a>
    </div>
</body>

</html>
