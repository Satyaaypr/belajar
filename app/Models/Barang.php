<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    public $timestamps=false;
    protected $fillable = ['nama_barang','jumlah_barang'];


}
