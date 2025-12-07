<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        
       
            {{-- <h2 class="ri-h-2 mb-3 text-green">Compte</h2>
                <div class="flex items-center gap-2">
                    <a href="{{ route('compte', ['op' => '-', 'count' => $count]) }}"
                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                    aria-label="Diminuer le compte">-</a>

                    <span class="text-dark font-bold py-2 px-4 rounded">{{ $count ?? 0 }}</span>

                    <a href="{{ route('compte', ['op' => '+', 'count' => $count]) }}"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"
                    aria-label="Augmenter le compte">+</a>
                </div>
                @php
                    $title ="hello titre"
                @endphp

                <!-- Trigger -->
                <button data-modal-target="infoModal">Ouvrir info</button>

                <!-- Composant -->
                <x-modal id="infoModal" title="Informations importantes" size="md">
                    <p>Contenu du modal : voici des informations pour les agents.</p>
                </x-modal> 
            --}}

            {{-- formulaire --}}
          
      
    </body>
</html>
