<?php

namespace App\Http\Controllers;

use App\Models\Dictionary;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    function index()
    {
        $recentlyVisitedDictionaries = Dictionary::getRecentlyVisited();
        // $recentlyVisitedFlashCards = FlashCards::getRecentlyVisited();
        $popularDictionaries = Dictionary::getMostPopular();

        return Inertia::render('Home/Home', [
            "props" => [
                "statsSummary" => [
                    "Entries" => 50,
                    "Progress" => 50,
                    "Regression" => 50,
                ],
                "recentlyVisited" => $recentlyVisitedDictionaries,
                "popularDictionaries" => $popularDictionaries
            ]
        ]);
    }
}
