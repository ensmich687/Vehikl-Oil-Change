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

    /**
     * Get the attributes that should be cast.
     */
    protected function casts(): array
    {
        return [
            "id" => 'integer',
            'currentOdometer' => 'integer',
            'previousOdometer' => 'integer',
            'previousDate' => 'date',
            'updated_at' => 'datetime',
            'created_at' => 'datetime',
        ];
    }
}