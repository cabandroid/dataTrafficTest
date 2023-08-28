<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new Client();
        $response = $client->get('https://rickandmortyapi.com/api/location');
        $locations = json_decode($response->getBody(), true);
        return view('locations.index', compact('locations'));
    }

}
