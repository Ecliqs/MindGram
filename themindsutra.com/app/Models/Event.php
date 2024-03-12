<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model{
    use HasFactory;

    public function eventregistration(){
        return $this->hasMany(Eventregistration::class);
    }

    protected $fillable = [
        'title',
        'event_type',
        'image',
        'date',
        'time',
        'description',
    ];
}
