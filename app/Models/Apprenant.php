<?php

namespace App\Models;

use App\Models\Note;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Apprenant extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'prenom', 'email', 'matricule', 'classe', 'adresse'];
    public function notes()
    {
        return $this->hasMany(Note::class);
    }

}
