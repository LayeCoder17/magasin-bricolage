<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produit extends Model
{
    // Nom de la table
    protected $table = 'produits';

    // Champs remplissables en masse
    protected $fillable = [
        'categorie_id',
        'nom',
        'code',
        'code_racine',
        'description',
        'schema_attributs',
        'actif',
    ];

    // Casts automatiques
    protected $casts = [
        'schema_attributs' => 'array',
        'actif'            => 'boolean',
    ];

    /**
     * Le produit appartient à une catégorie.
     */
    public function categorie(): BelongsTo
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }

    /**
     * Le produit possède plusieurs variantes.
     */
    public function variantes(): HasMany
    {
        return $this->hasMany(VarianteProduit::class, 'produit_id');
    }
}

