<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'scheduled_date', 'status','scheduled_time',
    ];
    // Define relationships
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
