<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'accountnumber',
        'name',
        'cardnumber',
        'expiration',
        'cvc',
        'pin'
    ];
    
    protected $hidden = [
        'pin'
    ];
    
    protected $casts = [
        'card_created' => 'datetime'
    ];
}
