<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $currentOdometer
 * @property string $previousOdometer
 * @property DateTime $previousDate
 */
class OilChange extends Model
{
    protected $fillable = ["currentOdometer", "previousOdometer", "previousDate"];
}