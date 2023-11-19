<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    protected $table = 'profils';

    function user() {
        return $this->belongsTo(User::class);
    }
}
