<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    //
    protected $table = 'produk';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_produk',
        'id_kategori',
        'asal',
        'link',
        'harga',
        'image',
    ];
}
