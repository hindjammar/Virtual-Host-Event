<?php

namespace App\Models;
use App\Models\Agenda;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    
    protected $primaryKey= 'idE';

    public function agendas(){

        return $this->hasMany(Agenda::class);
    }

    
}