<?php

namespace DsUrquiza\GestionHotel\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="rooms")
 */
class habitaciones {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $number; // Número de habitación

    /**
     * @ORM\Column(type="integer")
     */
    private $capacity; // Capacidad máxima de personas

    /**
     * @ORM\Column(type="float")
     */
    private $price_per_night; // Precio por noche

    // Getters y Setters
    public function getId(): ?int {
        return $this->id;
    }

    public function getNumber(): ?int {
        return $this->number;
    }

    public function setNumber(int $number): self {
        $this->number = $number;
        return $this;
    }

    public function getCapacity(): ?int {
        return $this->capacity;
    }

    public function setCapacity(int $capacity): self {
        $this->capacity = $capacity;
        return $this;
    }

    public function getPricePerNight(): ?float {
        return $this->price_per_night;
    }

    public function setPricePerNight(float $price_per_night): self {
        $this->price_per_night = $price_per_night;
        return $this;
    }
}
