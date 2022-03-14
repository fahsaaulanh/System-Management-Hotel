<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkin extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function kamar()
    {
        return $this->belongsTo(Kamar::class);
    }

    public function tamu()
    {
        return $this->belongsTo(Tamu::class);
    }

    public function pesanLayanan()
    {
        return $this->hasMany(PesanLayanan::class);
    }
}
