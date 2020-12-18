<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produksi extends Model
{
    use HasFactory;
    protected $table = 'Luas';

    protected $fillable = ['tahun','kecamatan_id','tanaman_perkebunan_id','nilai'];
}
