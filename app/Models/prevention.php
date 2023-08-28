<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prevention extends Model
{
    use HasFactory;

    protected $table = 'preventions';

    protected $guarded = [];

    public function sub_criteria()
    {
        return $this->belongsTo(SubCriteria::class, 'sub_criteria_id');
    }
}
