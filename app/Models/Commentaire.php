<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Commentaire extends Model
{
    use HasFactory;
    protected $table='commentaires';
    protected $id='id';
    protected $fillable=['comment','produit_id','user_id'];

    public function produits():BelongsTo
    {
        return $this->belongsTo(produits::class);
    }
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
