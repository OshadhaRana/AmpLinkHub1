<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BatteryReplacement extends Model
{
    use HasFactory;

    // Define the table name (if not following Laravel's naming convention)
    protected $table = 'battery_replacements';

    // Primary key of the table
    protected $primaryKey = 'battery_replace_id';

    // Allow mass assignment for these fields
    protected $fillable = [
        'user_id',
        'replacement_date'
    ];

    /**
     * Define the relationship between BatteryReplacement and User.
     * A battery replacement belongs to a user.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
