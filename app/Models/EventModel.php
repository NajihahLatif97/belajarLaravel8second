<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ParticipantModel;

class EventModel extends Model
{
    use HasFactory;
    protected $table = 'events';

    public function participant()
    {
        return $this ->belongsTo(ParticipantModel::class);
    }
}
