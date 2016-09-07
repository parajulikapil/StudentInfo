<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class schoolInfo extends Model
{
    protected $fillable = [
                'school_name','percentage','board','total','user_email',
    ];
}
