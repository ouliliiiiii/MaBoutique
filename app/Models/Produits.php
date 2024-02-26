<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produits extends Model
{
    use HasFactory;
    protected $fillable=['nom','photo','description','prix','quantite','statut','taille','is_solde','remise','category_id'];

    public function category():BelongsTo 
    {
        return $this->belongsTo(Category::class);
    }

    public function comment():HasMany
    {
        return $this->hasMany(Comment::class,'produit_id','id');
    }

    public function remise($prix, $remise)
    {
        return ($prix * $remise) / 100;
    }
    
}
