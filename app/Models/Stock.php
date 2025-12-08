<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Stock extends Model
{
    // Nom de la table
    protected $table = 'stocks';

    // Champs remplissables en masse
    protected $fillable = [
        'boutique_id',
        'variante_produit_id',
        'quantite',
        'quantite_reservee',
        'stock_min',
        'stock_max',
    ];

    /**
     * Le stock appartient à une boutique.
     */
    public function boutique(): BelongsTo
    {
        return $this->belongsTo(Boutique::class, 'boutique_id');
    }

    /**
     * Le stock concerne une variante de produit.
     */
    public function variante(): BelongsTo
    {
        return $this->belongsTo(VarianteProduit::class, 'variante_produit_id');
    }
}

