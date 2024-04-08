<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;
	

    protected $fillable = [
        'accountnumber',
        'id',
        'amount',
        'creditordebit',
        'memo'
    ];
    
  
    
    protected $casts = [
        'timestamp' => 'datetime'
    ];
}

	
	

