<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\VideoRepository;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: VideoRepository::class)]
class Video
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: 'Le champ categorie est requis')]
    private $name;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: 'Le champ categorie est requis')]
    private $codeYoutube;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: 'Le champ categorie est requis')]
    private $image;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCodeYoutube(): ?string
    {
        return $this->codeYoutube;
    }

    public function setCodeYoutube(string $codeYoutube): self
    {
        $this->codeYoutube = $codeYoutube;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }
}
