<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typeabonnement extends Model
{
    use HasFactory;
        protected $fillable=[
     'id','nom','montant', 'duree','datefin'];


      public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
    
     public function propriete()
     {
        return $this->belongsTo(Propriete::class);
    }
}
