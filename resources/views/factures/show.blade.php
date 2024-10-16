<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de la facture</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-lg">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Détails de la facture</h1>

        <div class="space-y-4">
            <p class="text-lg font-semibold text-gray-800">
                <strong>Description :</strong> {{ $facture->description }}
            </p>
            <p class="text-lg font-semibold text-gray-800">
                <strong>Montant :</strong> {{ $facture->montant }} €
            </p>
            <p class="text-lg font-semibold text-gray-800">
                <strong>Client :</strong> {{ $facture->client->nom }}
            </p>
        </div>

        <div class="mt-6 text-center">
            <a href="{{ route('factures.index') }}" 
               class="text-blue-500 hover:underline">
                Retour à la liste des factures
            </a>
        </div>
    </div>
</body>

</html>
