<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beneficiary extends Model
{
    use HasFactory;

    public function capmpaign()
    {
        return $this->belongsTo(campaign::class);
    }
}
