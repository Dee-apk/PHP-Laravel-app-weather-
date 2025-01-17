<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Check</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-6 rounded shadow-lg w-full max-w-sm">
        <h1 class="text-2xl font-bold text-gray-900 text-center mb-6">Check Weather</h1>

        <!-- Weather Form -->
        <form action="{{ route('weather.check') }}" method="POST" class="space-y-4">
            @csrf
            <label for="country" class="block text-gray-700 font-medium">
                Enter Country (or City) Name:
            </label>
            <input 
                type="text" 
                id="country" 
                name="country" 
                placeholder="Enter city or country" 
                class="border border-gray-300 rounded px-4 py-2 w-full focus:outline-none focus:ring-2 focus:ring-violet-400"
                required
            >
            <button 
                type="submit" 
                class="w-full bg-violet-500 text-white py-2 rounded hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring-2 focus:ring-violet-300 transition duration-200"
            >
                Check Weather
            </button>
        </form>

        <!-- Weather Result -->
        @if(isset($weather))
            <div class="mt-6 text-center">
                <h2 class="text-lg font-semibold text-gray-800">Weather in {{ $country }}:</h2>
                <p class="text-gray-700">Temperature: <strong>{{ $weather['main']['temp'] }} °C</strong></p>
                <p class="text-gray-700">Condition: <strong>{{ $weather['weather'][0]['description'] }}</strong></p>
                <p class="text-gray-700">Humidity: <strong>{{ $weather['main']['humidity'] }} %</strong></p>
            </div>
        @endif
    </div>
</body>
</html>
