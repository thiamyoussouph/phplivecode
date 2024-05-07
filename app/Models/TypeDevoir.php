<?php

namespace App\Models;

use App\Models\Note;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TypeDevoir extends Model
{
    use HasFactory;
    protected $fillable = ['nom'];
    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}
