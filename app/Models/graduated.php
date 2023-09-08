<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class graduated extends Model
{
    use HasFactory;
    protected $table = 'graduateds';
    protected $fillable = [
        'graduated_name',
        'batch',
        'mobile_number',
        'blood_group',
        't_shirt',
        'profession',
        'bkash',
        'transaction_id',
       'img'
    ];
}