<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryTajweed extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "icon",
    ];

    public function tajweeds()
    {
        return $this->hasMany(Tajweed::class);
    }

    public static function boot()
    {
        parent::boot();
        self::deleting(function ($category_tajweed){
            $category_tajweed->tajweeds()->each(function ($tajweed){
               $tajweed->delete();
            });
        });
    }
}
