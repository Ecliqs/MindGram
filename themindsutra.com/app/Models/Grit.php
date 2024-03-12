<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grit extends Model{
    use HasFactory;

    public function participant(){
        return $this->belongsTo(Participant::class);
    }

    protected $fillable = [
        'participant_id',
        'assessment',
        'grit',
        'ci',
        'pe',
        'bgrit',
        'amb',
    ];
}
