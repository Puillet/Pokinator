<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dresser
 *
 * @ORM\Table(name="dresser", indexes={@ORM\Index(name="I_FK_DRESSER_DRESSEUR", columns={"ID_DRESSEUR"}), @ORM\Index(name="I_FK_DRESSER_POKEMON", columns={"ID_POKEMON"})})
 * @ORM\Entity
 */
class Dresser
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_DRESSEUR", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idDresseur;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_POKEMON", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idPokemon;

    public function getIdDresseur(): ?int
    {
        return $this->idDresseur;
    }

    public function getIdPokemon(): ?int
    {
        return $this->idPokemon;
    }


}
