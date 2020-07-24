<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    //
    protected $table = 'makanan';
    protected $fillable = ['Nama', 'Jenis', 'Rating', 'Deskripsi', 'Gambar', 'Ulasan', 'Rekomendasi', 'Promo', 'Harga'];
    public $timestamps = false;
}
