<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checks extends Model
{
    protected $fillable = ['requestno', 'date', 'location', 'checkedin', 'checkedout', 'personnels'];
}
