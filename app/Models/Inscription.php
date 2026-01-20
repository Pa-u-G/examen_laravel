<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    protected $fillable = [
        'name',
        'email',
        'event',
        'file',
    ];
    protected $table = "inscriptions";
    
    public function eventRelation()
    {
        return $this->belongsTo(Event::class, "event");
    }
}