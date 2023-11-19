<?php

namespace App\Models;

use App\Models\pesanan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kendaraan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class);
    }
}
