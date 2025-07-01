<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobileLegends extends Model
{
    use HasFactory;

    protected $fillable = [
        'team_name',
        'email',

        'name1',
        'phone_number1',
        'line1',
        'id_mole1',
        'server_mole1',
        'institution1',
        'idcard1',
        
        'name2',
        'phone_number2',
        'line2',
        'id_mole2',
        'server_mole2',
        'institution2',
        'idcard2',
        
        'name3',
        'phone_number3',
        'line3',
        'id_mole3',
        'server_mole3',
        'institution3',
        'idcard3',
        
        'name4',
        'phone_number4',
        'line4',
        'id_mole4',
        'server_mole4',
        'institution4',
        'idcard4',
        
        'name5',
        'phone_number5',
        'line5',
        'id_mole5',
        'server_mole5',
        'institution5',
        'idcard5',
        
        'payment',
        'verification',
    ];
}
