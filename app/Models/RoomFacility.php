<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomFacility extends Model
{
    use HasFactory;

    protected $table = 'room_facility_type';

    protected $fillable = [
        'id',
        'name',
        'remark'
    ];
}