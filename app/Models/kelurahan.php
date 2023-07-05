<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelurahan extends Model
{
    use HasFactory;

    // yang gaboleh diisi
    protected $guarded = ['id'];

    public function kecamatan()
    {
        return $this->belongsTo(kecamatan::class);
    }
}
