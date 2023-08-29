<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComplaintDetail extends Model
{
    use HasFactory;

    protected $table = 'complaint_details';

    protected $guarded = [];

    public function sub_criteria()
    {
        return $this->belongsTo(SubCriteria::class, 'sub_criteria_id');
    }
}
