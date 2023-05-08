<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Learner extends Model
{
    protected $table = 'learner';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
    ];
}

