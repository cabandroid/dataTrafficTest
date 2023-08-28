<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

class EpisodeController extends Controller
{
    public function index()
    {
        $response = Http::get('https://rickandmortyapi.com/api/episode');
        $episodesData = $response->json();
        return view('episodes.index', compact('episodesData'));
    }
}