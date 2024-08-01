<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'amount',
        'description',
        'is_recurrent',
        'expense_date'
        ,'user_id',

    ];
    protected $casts = [
        'expense_date' => 'date', // Cela assure que expense_date est traité comme une instance de Carbon
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function category() {
        return $this->belongsTo(Category::class);
    }

}
