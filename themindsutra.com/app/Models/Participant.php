<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model{
    use HasFactory;

    public function attitude(){
        return $this->hasMany(Attitude::class);
    }
    public function selfesteem(){
        return $this->hasMany(Selfesteem::class);
    }
    public function authenticity(){
        return $this->hasMany(Authenticity::class);
    }
    public function forgivenesstest(){
        return $this->hasMany(Forgivenesstest::class);
    }
    public function internetaddictiontest(){
        return $this->hasMany(Internetaddictiontest::class);
    }
    public function grit(){
        return $this->hasMany(Grit::class);
    }

    protected $fillable = [
        'full_name',
        'email',
        'mobile',
        'gender',
        'age',
        'internet_usage',
    ];
}
