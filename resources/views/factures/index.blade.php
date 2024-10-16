<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des factures</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-lg">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Liste des factures</h1>
        
        <a href="{{ route('factures.create') }}" 
           class="block mb-4 text-center bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
           Ajouter une facture
        </a>

        @if($factures->isEmpty())
            <p class="text-center text-gray-500">Aucune facture disponible.</p>
        @else
            <ul class="space-y-4">
                @foreach ($factures as $facture)
                    <li class="flex justify-between items-center p-4 border border-gray-300 rounded-lg shadow-sm bg-gray-50">
                        <div>
                            <p class="text-lg font-semibold text-gray-800">{{ $facture->description }}</p>
                            <p class="text-gray-600">{{ $facture->montant }} €</p>
                        </div>
                        <a href="{{ route('factures.edit', $facture->id) }}" 
                           class="text-blue-500 hover:underline" aria-label="Modifier facture {{ $facture->description }}">
                           Modifier
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</body>

</html>
