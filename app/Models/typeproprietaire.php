<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Typeproprietaire extends Model
{
    use HasFactory;
    use HasFactory;
        protected $fillable=[
       'id','libelle'];

        public function typeabonnement()
    {
        return $this->hasMany(Typeabonnement::class);
    }
   
}
