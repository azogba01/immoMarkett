<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propriete extends Model
{
    use HasFactory;
        protected $fillable=[
     'id','etat','prix', 'superficie', 'condition'];

        public function proprietes(){
        return $this->hasMany(Propriete::class);
}
}
