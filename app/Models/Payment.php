<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $guarded = [];

    public function getAmountInDollarsAttribute(): string
    {
        return number_format($this->amount / 100, 2);
    }
}