<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Trinet Prima Solusi</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen">

<!-- BACKGROUND -->
<div class="relative min-h-screen bg-cover bg-center"
     style="background-image: url('{{ asset('images/background-trinet.jpeg') }}');">

    <!-- OVERLAY -->
    <div class="absolute inset-0 bg-black bg-opacity-60"></div>

    <!-- CONTENT -->
    <div class="relative z-10 flex items-center justify-center min-h-screen">
        <div class="text-center px-6">

            <img src="{{ asset('images/cover-trinet.jpeg') }}"
                 alt="Trinet Prima Solusi"
                 class="mx-auto h-32 mb-6 bg-white p-4 rounded-xl shadow-lg">

            <h1 class="text-4xl font-bold text-white">
                Trinet Prima Solusi
            </h1>

            <p class="mt-4 text-lg text-gray-200 max-w-xl mx-auto">
                IT Acceleration Partner untuk solusi sistem terintegrasi,
                manajemen aset, dan transformasi digital perusahaan.
            </p>

            <div class="mt-8 space-x-4">
                <a href="{{ route('login') }}"
                   class="px-6 py-3 bg-red-600 text-white rounded-md hover:bg-red-700">
                    Login
                </a>

                <a href="{{ route('register') }}"
                   class="px-6 py-3 bg-white text-gray-900 rounded-md hover:bg-gray-200">
                    Register
                </a>
            </div>

            <p class="mt-10 text-sm text-gray-300">
                © {{ date('Y') }} Trinet Prima Solusi — All rights reserved
            </p>

        </div>
    </div>
</div>

</body>
</html>
