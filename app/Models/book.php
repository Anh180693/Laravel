<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $fillable = [
        "title",
        "ISBN",
        "pub_year",
        "available"
    ];

    public function book() {
        return $this->hasMany(Book::class);
    }
}
