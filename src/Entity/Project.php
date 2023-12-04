<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;


class Project
{
    private int $id;

    #[Assert\NotBlank(message: "oups pas de nom")]
    #[Assert\Length(
        min: 5,
        max: 70,
        minMessage: "nom trop court",
        maxMessage: "nom trop long"
    )]
    private string $name;

    #[Assert\NotBlank(message: "oups pas de description")]
    #[Assert\Length(
        min: 10,
        max: 300,
        minMessage: "description trop court",
        maxMessage: "description trop long"
    )]
    private string $description;

    #[Assert\NotBlank(message: "oups pas de date")]
    private $date;

    /**
     * Get the value of id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * 
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     */
    public function setDate($date): self
    {
        $this->date = $date;

        return $this;
    }
}
