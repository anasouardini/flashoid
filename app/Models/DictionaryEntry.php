<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DictionaryEntry extends Model
{
    use HasFactory, HasUuids;

    public static function getEntriesPaginated(){
        return DictionaryEntry::paginate(10);
    }
}
