<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class abonnement extends Model
{
    use HasFactory;
    use HasFactory;
        protected $fillable=[
       'id','datedebut','datefin','abonnement_id'];
}
