<?php

namespace App\Http\Controllers;

use App\Models\DictionaryEntry;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DictionaryEntryController extends Controller
{
    public static function index()
    {
        $entries = DictionaryEntry::getEntriesPaginated(10);
        return Inertia::render('EntriesList', [
            "entries" => $entries
        ]);
    }
}
