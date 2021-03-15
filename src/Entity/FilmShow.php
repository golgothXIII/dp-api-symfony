<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\FilmShowRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=FilmShowRepository::class)
 */
class FilmShow
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $scheduled;

    /**
     * @ORM\Column(type="integer")
     */
    private $movie;

    /**
     * @ORM\Column(type="integer")
     */
    private $room;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getScheduled(): ?\DateTimeInterface
    {
        return $this->scheduled;
    }

    public function setScheduled(?\DateTimeInterface $scheduled): self
    {
        $this->scheduled = $scheduled;

        return $this;
    }

    public function getMovie(): ?int
    {
        return $this->movie;
    }

    public function setMovie(int $movie): self
    {
        $this->movie = $movie;

        return $this;
    }

    public function getRoom(): ?int
    {
        return $this->room;
    }

    public function setRoom(int $room): self
    {
        $this->room = $room;

        return $this;
    }
}
