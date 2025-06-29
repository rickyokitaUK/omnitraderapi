<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>OmniTrader API</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
</head>
<body class=" text-gray-800 flex items-center justify-center min-h-screen">
<div class="text-center">
    <!-- SVG Logo -->
	<img src="{{ asset('images/logo.png') }}" alt="OmniTrader Logo" class="w-full h-24 mb-4 mx-auto">

    <!-- Heading -->
    <h1 class="text-3xl font-bold mb-2 mt-3">Powered by Altodock Digital Limited</h1>
</div>
</body>
</html>
