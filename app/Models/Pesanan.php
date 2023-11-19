<?php

namespace App\Models;

use App\Models\User;
use App\Models\kendaraan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pesanan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kendaraan()
    {
        return $this->belongsTo(kendaraan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }


    function atasan()
    {
        return $this->belongsToMany(User::class, 'pesanan_atasan', 'pesanan_id', 'atasan_id')
                    ->withPivot('confirmed')
                    ->withTimestamps();
    }
}
