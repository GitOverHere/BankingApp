<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction-history extends Model
{
    
	
	protected $fillable = [
        'accountnumber',
        'name',
		'userid',
    ];
    
   protected $casts = [
        'date_generated' => 'datetime'
    ];
	
	

}
