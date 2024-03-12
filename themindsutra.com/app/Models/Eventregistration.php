<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventregistration extends Model{
    use HasFactory;

    public function event(){
        return $this->belongsTo(Event::class);
    }

    protected $fillable = [
        'event_id',
        'name',
        'email',
        'mobile',
    ];
}
