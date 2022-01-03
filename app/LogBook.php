<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogBook extends Model
{
    //
    // use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'admin_name', 'requestno', 'visiting_date', 'morning_start', 'morning_end', 'afternoon_start', 'afternoon_end', 'personnels'
    ];
}
