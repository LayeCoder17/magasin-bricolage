<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    // Nom de la table
    protected $table = 'roles';

    // Champs remplissables en masse
    protected $fillable = [
        'nom',
        'code',
        'description',
    ];

    /**
     * Les utilisateurs qui possèdent ce rôle.
     */
    public function utilisateurs(): BelongsToMany
    {
        return $this->belongsToMany(
            User::class,          // modèle lié
            'role_utilisateur',   // table pivot
            'role_id',            // clé étrangère vers roles
            'utilisateur_id'      // clé étrangère vers users
        );
    }
}

