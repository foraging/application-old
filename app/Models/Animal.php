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
     * Get the description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Get the id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the image
     *
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * Get the name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get the parks that this animal can be found in
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
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
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
     * Set the parks that this animal can be found in
     *
     * @param Collection $parks
     *
     * @return self
     */
    public function setParks(Collection $parks): self
    {
        $this->parks = $parks;
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
}
