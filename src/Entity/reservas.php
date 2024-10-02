<?php

namespace DsUrquiza\GestionHotel\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="reservations")
 */
class reservas {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $check_in_date; // Fecha de entrada

    /**
     * @ORM\Column(type="date")
     */
    private $check_out_date; // Fecha de salida

    /**
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumn(nullable=false)
     */
    private $client; // Cliente que hace la reserva

    /**
     * @ORM\ManyToOne(targetEntity="Room")
     * @ORM\JoinColumn(nullable=false)
     */
    private $room; // Habitación reservada

    // Getters y Setters
    public function getId(): ?int {
        return $this->id;
    }

    public function getCheckInDate(): ?\DateTimeInterface {
        return $this->check_in_date;
    }

    public function setCheckInDate(\DateTimeInterface $check_in_date): self {
        $this->check_in_date = $check_in_date;
        return $this;
    }

    public function getCheckOutDate(): ?\DateTimeInterface {
        return $this->check_out_date;
    }

    public function setCheckOutDate(\DateTimeInterface $check_out_date): self {
        $this->check_out_date = $check_out_date;
        return $this;
    }

    public function getClient() {
        return $this->client;
    }

    public function setClient(clientes $client): self {
        $this->client = $client;
        return $this;
    }

    public function getRoom() {
        return $this->room;
    }

    public function setRoom(habitaciones $room): self {
        $this->room = $room;
        return $this;
    }
}
