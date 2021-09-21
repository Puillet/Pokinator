<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etre
 *
 * @ORM\Table(name="etre", indexes={@ORM\Index(name="I_FK_ETRE_COULEUR", columns={"ID_COULEUR"}), @ORM\Index(name="I_FK_ETRE_POKEMON", columns={"ID_POKEMON"})})
 * @ORM\Entity
 */
class Etre
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_COULEUR", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCouleur;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_POKEMON", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idPokemon;

    public function getIdCouleur(): ?int
    {
        return $this->idCouleur;
    }

    public function getIdPokemon(): ?int
    {
        return $this->idPokemon;
    }


}
