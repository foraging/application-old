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
     * get the description
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Get the id
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Get the image
     *
     * @return string|null
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * Get the name
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Get the parks this plant can be found in
     *
     * @return Park[]|Collection
     */
    public function getParks()
    {
        return $this->parks;
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
     * Get the scientific name
     *
     * @return string|null
     */
    public function getScientificName(): ?string
    {
        return $this->scientific;
    }

    /**
     * Get the slug
     *
     * @return string|null
     */
    public function getSlug(): ?string
    {
        return $this->slug;
    }

    /**
     * Get the type
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Is the plant available in the autumn?
     *
     * @return bool
     */
    public function isAvailableInAutumn(): bool
    {
        return $this->autumn;
    }

    /**
     * Is the plant available in the spring?
     *
     * @return bool
     */
    public function isAvailableInSpring(): bool
    {
        return $this->spring;
    }

    /**
     * Is the plant available in the summer?
     *
     * @return bool
     */
    public function isAvailableInSummer(): bool
    {
        return $this->summer;
    }

    /**
     * Is the plant available in the winter?
     *
     * @return bool
     */
    public function isAvailableInWinter(): bool
    {
        return $this->winter;
    }

    /**
     * Is this plant edible?
     *
     * @return bool
     */
    public function isEdible(): bool
    {
        return $this->edible;
    }

    /**
     * Is the plant poisonous?
     *
     * @return bool
     */
    public function isPoisonous(): bool
    {
        return $this->poisonous;
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

    /**
     * Set if the plant is available in the autumn
     *
     * @param bool $autumn
     *
     * @return self
     */
    public function setAvailableInAutumn(bool $autumn = true): self
    {
        $this->autumn = $autumn;
        return $this;
    }

    /**
     * Set if the plant is available in the spring
     *
     * @param bool $spring
     *
     * @return self
     */
    public function setAvailableInSpring(bool $spring = true): self
    {
        $this->spring = $spring;
        return $this;
    }

    /**
     * Set if the plant is available in the summer
     *
     * @param bool $summer
     *
     * @return self
     */
    public function setAvailableInSummer(bool $summer = true): self
    {
        $this->summer = $summer;
        return $this;
    }

    /**
     * Set if the plant is available in the winter
     *
     * @param bool $winter
     *
     * @return self
     */
    public function setAvailableInWinter(bool $winter = true): self
    {
        $this->winter = $winter;
        return $this;
    }

    /**
     * Set the description
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Set if the plant is edible
     *
     * @param bool $edible
     *
     * @return self
     */
    public function setEdible(bool $edible = true): self
    {
        $this->edible = $edible;
        return $this;
    }

    /**
     * Set the id
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the image
     *
     * @param string $image
     *
     * @return self
     */
    public function setImage(string $image): self
    {
        $this->image = $image;
        return $this;
    }

    /**
     * Set the name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Set if the plant is poisonous
     *
     * @param bool $poisonous
     *
     * @return self
     */
    public function setPoisonous(bool $poisonous = true): self
    {
        $this->poisonous = $poisonous;
        return $this;
    }

    /**
     * Set the scientific name
     *
     * @param string|null $scientific
     *
     * @return self
     */
    public function setScientificName(string $scientific = null): self
    {
        $this->scientific = $scientific;
        return $this;
    }

    /**
     * Set the slug
     *
     * @param string $slug
     *
     * @return self
     */
    public function setSlug(string $slug): self
    {
        $this->slug = $slug;
        return $this;
    }

    /**
     * Set the type
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }
}
