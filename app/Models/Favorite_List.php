<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite_List extends Model
{
    use HasFactory;
    public function users(){
        return $this->belongsTo(Classification::class);
    }

    public function medicines(){
        return  $this->belongsTo(Medicine::class);
    }
}
