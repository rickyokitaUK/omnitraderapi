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
<form action="/analyze-images" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="images[]" multiple accept="image/*">
    <button type="submit">Upload & Analyze</button>

    @if(isset($results))
    <div class="mt-6 space-y-4 max-w-xl">
        @foreach($results as $result)
            <div class="p-4 border rounded shadow">
                <strong>{{ $result['file'] }}</strong>
                <pre class="text-sm text-gray-700 whitespace-pre-wrap mt-2">{{ $result['text'] }}</pre>
            </div>
        @endforeach
    </div>
@endif
    
</form>
</body>
</html>
