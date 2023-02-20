<?php

namespace App\Models;

use App\Models\Referenciel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Type extends Model
{
    use HasFactory;
    protected $fillable = ['libelle'];
    public function referenciels(){
    return $this->hasMany(Referenciel::class);

}
}
