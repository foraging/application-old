<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Plant eloquent model
 *
 * @property int $id
 * @property string $slug
 * @property string $name
 * @property string $scientific
 * @property string $type
 * @property string $description
 * @property string $image
 * @property bool $edible
 * @property bool $poisonous
 * @property bool $spring
 * @property bool $summer
 * @property bool $autumn
 * @property bool $winter
 * @property Park[]|Collection $parks
 */
class Plant extends Model
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
     * Eloquent relationship to the parks this plant can be found in
     *
     * @return BelongsToMany
     */
    public function parks()
    {
        return $this->belongsToMany(Park::class, 'park_plants');
    }
}
