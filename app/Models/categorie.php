<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    use HasFactory;
    use HasFactory;
        protected $fillable=[
       'id','libelle'];

    //     public function biens(){
    //     return $this->hasMany(Bien::class);
    //  }
}
