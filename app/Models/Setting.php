<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'firm',
        'site',
        'email1',
        'email2',
        'address1',
        'address2',
        'coord1',
        'coord2',
        'gmaplink1',
        'gmaplink2',
        'city',
        'district',
        'phone1',
        'phone2',
        'fax',
        'linkedin1',
        'linkedin2',
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];
}
