<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tajweed extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description",
        "example_url",
        "tajweed_letter_url",
        "audio_url",
        "category_tajweed_id",
    ];

    public function category_tajweed()
    {
        return $this->belongsTo(CategoryTajweed::class);
    }
}
