
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
</head>
<body>
    <h1>Weather in {{ $weatherData['name'] }}</h1>
    <p>Temperature: {{ $weatherData['main']['temp'] }}°C</p>
    <p>Weather: {{ $weatherData['weather'][0]['description'] }}</p>
    <p>Humidity: {{ $weatherData['main']['humidity'] }}%</p>
</body>
</html>
