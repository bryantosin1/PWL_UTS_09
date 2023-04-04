<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bayi extends Model
{
    use HasFactory;
    protected $table = "bayis";
    public $timestamps = false;
    protected $primaryKey = 'no_urut';

    protected $fillable = [
        'no_urut',
        'nama',
        'alamat',
        'tanggal_lahir',
        'bb_lahir',
        'tb_lahir',
    ];
}
