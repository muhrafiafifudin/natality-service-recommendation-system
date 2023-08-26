<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prevention extends Model
{
    use HasFactory;

    protected $table = 'preventions';

    protected $guarded = [];

    public function disease()
    {
        return $this->belongsTo(User::class, 'disease_id');
    }
}
