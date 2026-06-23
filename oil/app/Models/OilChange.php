<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OilChanging extends Model
{
    protected $fillable = ["currentOdometer", "previousOdometer", "previousDate"];
}