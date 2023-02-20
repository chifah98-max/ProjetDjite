<?php

namespace App\Models;

use App\Models\Candidat;
use App\Models\Referenciel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Formation extends Model
{
    use HasFactory;
    protected $fillable = ['nom','duree','description','istated','dateD'];
    public function candidats(){
    return $this->belongsToMany(Candidat::class);

}
    public function referenciels(){
    return $this->belongsToMany(Referenciel::class);
    
}
}
