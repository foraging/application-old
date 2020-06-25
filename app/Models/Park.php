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
     * Get the animals that can be found in this park
     *
     * @return Animal[]|Collection
     */
    public function getAnimals()
    {
        return $this->animals;
    }

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
     * Get the plants that can be found in this park
     *
     * @return Plant[]|Collection
     */
    public function getPlants()
    {
        return $this->plants;
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
     * Get the slug
     *
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * Get the website
     *
     * @return string|null
     */
    public function getWebsite(): ?string
    {
        return $this->website;
    }

    /**
     * Save the park and it's relationships
     *
     * @return self
     */
    public function persist(): self
    {
        $this->save();

        foreach ($this->getAnimals() as $animal) {
            $this->animals()->save($animal);
        }

        foreach ($this->getPlants() as $plant) {
            $this->plants()->save($plant);
        }

        return $this;
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

    /**
     * Set the animals that can be found in this park
     *
     * @param Collection $animals
     *
     * @return self
     */
    public function setAnimals(Collection $animals): self
    {
        $this->setRelation('animals', $animals);
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
     * Set the plants that can be found in this park
     *
     * @param Collection $plants
     *
     * @return self
     */
    public function setPlants(Collection $plants): self
    {
        $this->setRelation('plants', $plants);
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
     * Set the website
     *
     * @param string|null $website
     *
     * @return self
     */
    public function setWebsite(?string $website): self
    {
        $this->website = $website;
        return $this;
    }
}
