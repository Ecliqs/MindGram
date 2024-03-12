<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authenticity extends Model{
    use HasFactory;

    public function participant(){
        return $this->belongsTo(Participant::class);
    }

    protected $fillable = [
        'participant_id',
        'assessment',
        'sa',
        'imp',
        'bp',
        'rt',
    ];
}
