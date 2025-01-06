<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'articles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'judul',
        'konten',
        'gambar',
    ];

    protected static function booted()
{
    static::creating(function ($artikel) {
        $artikel->slug = Str::slug($artikel->judul); // Membuat slug dari judul
    });
}
}
