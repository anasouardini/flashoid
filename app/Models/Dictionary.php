<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dictionary extends Model
{
    use HasFactory, HasUuids;

    public static function getRecentlyVisited()
    {
        // get the most recently visited dictionaries
        return Dictionary::orderBy('visited_at')->take(5)->get();
    }

    public static function getMostPopular()
    {
        // get the most popular dictionaries
        return Dictionary::orderBy('votes')->take(5)->get();
    }

    public static function getMostPopularPaginated()
    {
        // get the most popular dictionaries
        return Dictionary::orderBy('votes')->paginate(10);
    }
}
