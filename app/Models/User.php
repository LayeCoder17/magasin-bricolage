<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Attributs qu’on peut remplir en masse (create, update).
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * Attributs cachés lors de la sérialisation.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Casts automatiques.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Relation many-to-many : un utilisateur peut avoir plusieurs rôles.
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(
            Role::class,          // modèle lié
            'role_utilisateur',   // table pivot
            'utilisateur_id',     // clé étrangère vers users
            'role_id'             // clé étrangère vers roles
        );
    }
}
