<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Park eloquent model
 *
 * @property int $id
 * @property string $slug
 * @property string $name
 * @property string $description
 * @property string|null $website
 * @property string $image
 * @property Collection|Animal[] $animals
 * @property Collection|Plant[] $plants
 */
class Park extends Model
{
    /**
     * Eloquent relationship to the animals found in this park
     *
     * @return BelongsToMany
     */
    public function animals()
    {
        return $this->belongsToMany(Animal::class, 'park_animals');
    }

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
     * Eloquent relationship to the plants found in this park
     *
     * @return BelongsToMany
     */
    public function plants()
    {
        return $this->belongsToMany(Plant::class, 'park_plants');
    }
}
