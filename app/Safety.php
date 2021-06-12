<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Safety extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date_received', 'category','sub_category',
    ];
}
