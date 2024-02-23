<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $fillable=['nom','photo'];

    public function produits():HasMany
    {
      return $this->hasMany(produits::class,'category_id','id');
    }


    // Mes Getters et Setters
    public function getNom() {

      return $this->attributes['nom'];
    }

    public function setNom($nom) {
      $this->attributes['nom'] = $nom;
    }

    public function getPhoto() {

      return $this->attributes['photo'];
    }

    public function setPhoto($photo) {
      $this->attributes['photo'] = $photo;
    }
}
