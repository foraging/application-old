<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Animal eloquent model
 *
 * @property int $id
 * @property string $slug
 * @property string $name
 * @property string $scientific
 * @property string $description
 * @property string $image
 * @property Collection|Park[] $parks
 */
class Animal extends Model
{
    /**
     * Route model binding using the slug
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Eloquent relationship to the parks this animal can be found in
     *
     * @return BelongsToMany
     */
    public function parks()
    {
        return $this->belongsToMany(Park::class, 'park_animals');
    }
}
