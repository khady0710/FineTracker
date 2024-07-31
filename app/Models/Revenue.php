<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revenue extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'amount',
        'description',
        'is_recurrent',
        'revenue_date','user_id',

    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
