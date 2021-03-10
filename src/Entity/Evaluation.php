<?php


namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;
use App\Repository\EvaluationRepository;
/**
 * @ORM\Entity
 **/
class Evaluation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="datetime")
     **/
    private $date;


    /**
     * @ORM\Column(type="string")
     **/
    private $name;


    /**
     * @ORM\Column(type="integer")
     **/
    private $star;

    /**
     * @ORM\ManyToOne(targetEntity=Recipe::class, inversedBy="evaluation")
     */
    private $recipe;


    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }
    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName(string $name): self
    {
        $this->name = $name;
    }
    public function getStar()
    {
        return $this->star;
    }
    public function setStar(int $star): self
    {
        $this->star = $star;
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRecipe(): ?Recipe
    {
        return $this->recipe;
    }

    public function setRecipe(?Recipe $recipe): self
    {
        $this->recipe = $recipe;

        return $this;
    }
}