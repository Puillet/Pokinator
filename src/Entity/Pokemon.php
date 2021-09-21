<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pokemon
 *
 * @ORM\Table(name="pokemon", indexes={@ORM\Index(name="I_FK_POKEMON_GENERATION", columns={"GENERATION"})})
 * @ORM\Entity
 */
class Pokemon
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM", type="string", length=128, nullable=false)
     */
    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="GENERATION", type="integer", nullable=false)
     */
    private $generation;

    /**
     * @var int
     *
     * @ORM\Column(name="POINTS_DE_VIE", type="integer", nullable=false)
     */
    private $pointsDeVie;

    /**
     * @var int
     *
     * @ORM\Column(name="ATTAQUE_PHYSIQUE", type="integer", nullable=false)
     */
    private $attaquePhysique;

    /**
     * @var int
     *
     * @ORM\Column(name="DEFENSE_PHYSIQUE", type="integer", nullable=false)
     */
    private $defensePhysique;

    /**
     * @var int
     *
     * @ORM\Column(name="ATTAQUE_SPECIALE", type="integer", nullable=false)
     */
    private $attaqueSpeciale;

    /**
     * @var int
     *
     * @ORM\Column(name="DEFENSE_SPECIALE", type="integer", nullable=false)
     */
    private $defenseSpeciale;

    /**
     * @var int
     *
     * @ORM\Column(name="VITESSE", type="integer", nullable=false)
     */
    private $vitesse;

    /**
     * @var bool
     *
     * @ORM\Column(name="LEGENDAIRE", type="boolean", nullable=false)
     */
    private $legendaire;

    /**
     * @var bool
     *
     * @ORM\Column(name="MEGA_EVOLUTION", type="boolean", nullable=false)
     */
    private $megaEvolution;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IMAGE", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $image;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getGeneration(): ?int
    {
        return $this->generation;
    }

    public function setGeneration(int $generation): self
    {
        $this->generation = $generation;

        return $this;
    }

    public function getPointsDeVie(): ?int
    {
        return $this->pointsDeVie;
    }

    public function setPointsDeVie(int $pointsDeVie): self
    {
        $this->pointsDeVie = $pointsDeVie;

        return $this;
    }

    public function getAttaquePhysique(): ?int
    {
        return $this->attaquePhysique;
    }

    public function setAttaquePhysique(int $attaquePhysique): self
    {
        $this->attaquePhysique = $attaquePhysique;

        return $this;
    }

    public function getDefensePhysique(): ?int
    {
        return $this->defensePhysique;
    }

    public function setDefensePhysique(int $defensePhysique): self
    {
        $this->defensePhysique = $defensePhysique;

        return $this;
    }

    public function getAttaqueSpeciale(): ?int
    {
        return $this->attaqueSpeciale;
    }

    public function setAttaqueSpeciale(int $attaqueSpeciale): self
    {
        $this->attaqueSpeciale = $attaqueSpeciale;

        return $this;
    }

    public function getDefenseSpeciale(): ?int
    {
        return $this->defenseSpeciale;
    }

    public function setDefenseSpeciale(int $defenseSpeciale): self
    {
        $this->defenseSpeciale = $defenseSpeciale;

        return $this;
    }

    public function getVitesse(): ?int
    {
        return $this->vitesse;
    }

    public function setVitesse(int $vitesse): self
    {
        $this->vitesse = $vitesse;

        return $this;
    }

    public function getLegendaire(): ?bool
    {
        return $this->legendaire;
    }

    public function setLegendaire(bool $legendaire): self
    {
        $this->legendaire = $legendaire;

        return $this;
    }

    public function getMegaEvolution(): ?bool
    {
        return $this->megaEvolution;
    }

    public function setMegaEvolution(bool $megaEvolution): self
    {
        $this->megaEvolution = $megaEvolution;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }


}
