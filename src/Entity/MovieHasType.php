<?php

namespace App\Entity;

use App\Repository\MovieHasTypeRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;

#[ORM\Entity(repositoryClass: MovieHasTypeRepository::class)]
#[ApiResource]
class MovieHasType
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Movie $MovieId = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Type $TypeId = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMovieId(): ?Movie
    {
        return $this->MovieId;
    }

    public function setMovieId(Movie $MovieId): self
    {
        $this->MovieId = $MovieId;

        return $this;
    }

    public function getTypeId(): ?Type
    {
        return $this->TypeId;
    }

    public function setTypeId(Type $TypeId): self
    {
        $this->TypeId = $TypeId;

        return $this;
    }
}
