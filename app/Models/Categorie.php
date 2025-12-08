<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categorie extends Model
{
    // Nom de la table
    protected $table = 'categories';

    // Champs remplissables en masse
    protected $fillable = [
        'categorie_parente_id',
        'nom',
        'code',
        'description',
        'active',
        'position',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];

    /**
     * Catégorie parente (ex. Outillage pour Perceuses).
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Categorie::class, 'categorie_parente_id');
    }

    /**
     * Sous-catégories (enfants) de cette catégorie.
     */
    public function enfants(): HasMany
    {
        return $this->hasMany(Categorie::class, 'categorie_parente_id');
    }

    /**
     * Produits rattachés à cette catégorie.
     */
    public function produits(): HasMany
    {
        return $this->hasMany(Produit::class, 'categorie_id');
    }
}

