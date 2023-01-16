<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table = 'events';
    protected $fillable = [
        'id',
        'type',
        'start_date',
        'end_date',
        'details',
        'vote_limit',
        'vote_cooldown',
        'event_organizer',

    ];
}
