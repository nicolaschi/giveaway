<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class campaign extends Model
{
    use HasFactory;

    protected $fillable = [
        'campaign_name',
        'status',
        'user_name',
        'email',
        'phone_number',
        'nin',
        'ammount',
        'unique_id',

    ];

    public function beneficiary()
    {
        return $this->hasMany(beneficiary::class);
    }
}
