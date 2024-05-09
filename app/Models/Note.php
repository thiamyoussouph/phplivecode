<?php

namespace App\Models;

use App\Models\Matier;
use App\Models\Apprenant;
use App\Models\TypeDevoir;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Note extends Model
{
    use HasFactory;
    protected $fillable = ['apprenant_id', 'matier_id', 'type_devoir_id', 'note', 'coefficient'];

    public function apprenant()
    {
        return $this->belongsTo(Apprenant::class, 'apprenant_id');
    }
    public function matier()
    {
        return $this->belongsTo(Matier::class, 'matiere_id');
    }
    public function typeDevoir(){
        return $this->belongsTo(TypeDevoir::class, 'typedevoior_id');
    }
     
     
}
