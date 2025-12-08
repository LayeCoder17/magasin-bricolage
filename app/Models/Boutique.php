<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Boutique extends Model
{
    // Nom de la table
    protected $table = 'boutiques';

    // Champs remplissables en masse
    protected $fillable = [
        'nom',
        'code',
        'telephone',
        'email',
        'adresse_ligne1',
        'adresse_ligne2',
        'ville',
        'pays',
        'actif',
    ];

    protected $casts = [
        'actif' => 'boolean',
    ];

    /**
     * Les lignes de stock de cette boutique.
     */
    public function stocks(): HasMany
    {
        return $this->hasMany(Stock::class, 'boutique_id');
    }
}

