<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class typeproprietaire extends Model
{
    use HasFactory;
    use HasFactory;
        protected $fillable=[
       'id','libelle','modalite_id'];
}
