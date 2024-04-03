<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    use HasFactory;
    
        protected $fillable
        =['id','libelle'];

   public function propriete()
    {
        return $this->hasMany(Propriete::class);
       }  
        
        public function typeabonnement()
    {
        return $this->hasMany(Typeabonnement::class);
    }
   
}
