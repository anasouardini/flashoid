<?php

namespace App\Http\Controllers;

use App\Models\Dictionary;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DictionaryController extends Controller
{
    function index()
    {
        $popularDictionaries = Dictionary::getMostPopularPaginated();

        return Inertia::render('DictionariesList', [
            "dictionaries" => $popularDictionaries
        ]);
    }
}
