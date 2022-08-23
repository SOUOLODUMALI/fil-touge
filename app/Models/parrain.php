<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\fieul;
class parrain extends Model
{
    use HasFactory;
    protected $fillable  = [
        "nom",
        "prenom",
        "date_naissance",
        "fieul_telephone",
        "email",
        "password",
    ];

public function fieul(){
    return $this->belongsTo(fieul::class, "fieul_id");
}  

}
