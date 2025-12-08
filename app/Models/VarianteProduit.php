<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class VarianteProduit extends Model
{
    // Nom de la table
    protected $table = 'variantes_produit';

    // Champs remplissables en masse
    protected $fillable = [
        'produit_id',
        'nom',
        'code',
        'code_barres',
        'prix',
        'prix_promo',
        'devise',
        'attributs',
        'par_defaut',
        'actif',
    ];

    // Casts automatiques
    protected $casts = [
        'attributs'   => 'array',
        'par_defaut'  => 'boolean',
        'actif'       => 'boolean',
        'prix'        => 'decimal:2',
        'prix_promo'  => 'decimal:2',
    ];

    /**
     * La variante appartient à un produit.
     */
    public function produit(): BelongsTo
    {
        return $this->belongsTo(Produit::class, 'produit_id');
    }

    /**
     * La variante a plusieurs lignes de stock (une par boutique).
     */
    public function stocks(): HasMany
    {
        return $this->hasMany(Stock::class, 'variante_produit_id');
    }
}

