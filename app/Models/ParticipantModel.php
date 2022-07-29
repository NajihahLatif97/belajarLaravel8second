<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class ParticipantModel extends Model
{
    use HasFactory;
    protected $table = 'participants';

    protected $fillable = [
        'user_id',
        'event_id',
        'attending',
        'reason_for_not_attending',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
