<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccessRequests extends Model
{
    //
    // use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'requestno', 'fullname', 'phone_number', 'id_number', 'date', 'starting_date', 'end_date', 'remaining_days', 'access_req_location',
        'access_time', 'areas_tobe_accessed', 'personnel1', 'personnel2', 'personnel3', 'personnel4',
        'location', 'impact', 'purpose', 'letter', 'is_confirmed', 'is_approved', 'is_denied', 'is_rejected', 'unit','denial_reason', 'rejection_reason'
    ];

}
