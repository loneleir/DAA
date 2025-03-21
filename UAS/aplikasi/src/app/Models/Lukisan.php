<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lukisan extends Model
{
    use HasFactory;
    protected $fillable = ['nama_lukisan', 'tahun_pembuatan', 'deskripsi'];
}
