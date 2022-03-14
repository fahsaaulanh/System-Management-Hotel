<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function JenisLayanan()
    {
        return $this->belongsTo(JenisLayanan::class);
    }
}
