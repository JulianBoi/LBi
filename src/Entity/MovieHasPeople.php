<?php

namespace App\Entity;

use App\Repository\MovieHasPeopleRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;

#[ORM\Entity(repositoryClass: MovieHasPeopleRepository::class)]
#[ApiResource]
class MovieHasPeople
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Movie $Movie_id = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Type $Type_id = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?People $PeopleId = null;

    #[ORM\Column(length: 255)]
    private ?string $role = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $significance = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMovieId(): ?Movie
    {
        return $this->Movie_id;
    }

    public function setMovieId(Movie $Movie_id): self
    {
        $this->Movie_id = $Movie_id;

        return $this;
    }

    public function getTypeId(): ?Type
    {
        return $this->Type_id;
    }

    public function setTypeId(Type $Type_id): self
    {
        $this->Type_id = $Type_id;

        return $this;
    }

    public function getPeopleId(): ?People
    {
        return $this->PeopleId;
    }

    public function setPeopleId(People $PeopleId): self
    {
        $this->PeopleId = $PeopleId;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getSignificance(): ?string
    {
        return $this->significance;
    }

    public function setSignificance(?string $significance): self
    {
        $this->significance = $significance;

        return $this;
    }
}
