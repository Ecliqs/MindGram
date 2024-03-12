<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attitude extends Model{
    use HasFactory;

    public function participant(){
        return $this->belongsTo(Participant::class);
    }

    protected $fillable = [
        'participant_id',
        'assessment',
        'passive',
        'aggresive',
        'manipulation',
        'harmonious',
    ];
}
