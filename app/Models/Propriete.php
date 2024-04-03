<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propriete extends Model
{
    use HasFactory;
        protected $fillable=[
     'id','etat','prix', 'superficie', 'id_categorie' ,'condition','propriete_image','status'];

        public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
    
}
