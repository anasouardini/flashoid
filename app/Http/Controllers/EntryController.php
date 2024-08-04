<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EntryController extends Controller
{
    public static function index()
    {
        $entries = Entry::getEntriesPaginated(10);
        return Inertia::render('EntriesList', [
            "entries" => $entries
        ]);
    }
}
