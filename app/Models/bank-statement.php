<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bank-statement extends Model
{
    use HasFactory;

	protected $fillable = [
        'accountnumber',
        'name',
		'userid',
		'date_start',
       'date_end'
    ];

   protected $casts = [
        'date_generated' => 'datetime'
    ];



}
