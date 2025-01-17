<?php

// app/Http/Controllers/WeatherController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function showForm()
    {
        return view('weather');
    }

    public function checkWeather(Request $request)
    {
        // Get country or city name from the form
        $country = $request->input('country');

        // Make an API call to OpenWeather to get weather data
        $apiKey = '';  // Replace with your OpenWeather API key
        $response = Http::get("http://api.openweathermap.org/data/2.5/weather", [
            'q' => $country,
            'appid' => $apiKey,
            'units' => 'metric'
        ]);

        // Check if the response is successful
        if ($response->successful()) {
            $weather = $response->json();
            return view('weather', compact('weather', 'country'));
        } else {
            return back()->with('error', 'Weather data could not be fetched.');
        }
    }
}
