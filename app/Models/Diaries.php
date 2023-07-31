<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diaries extends Model
{
    use HasFactory;
    protected $fillable = [
        'Author_Id',
        'Supervisor_Id',
        'Plan_today',
        'End_today',
        'Plan_tomorrow',
        'Roadblocks',
        'Summary',
        'Status',

    ];
}
