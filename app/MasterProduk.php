<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterProduk extends Model
{
    //
    protected $table = 'master_produk';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_produk',
        'asal',
        'link',
        'harga',
        'image',
    ];
}
