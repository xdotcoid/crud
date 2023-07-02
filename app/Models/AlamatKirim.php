<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlamatKirim extends Model
{
    protected $fillable = ['nama_konsumen', 'nama', 'harga']; // Tambahkan 'nama_konsumen' pada $fillable

    // ...
}
