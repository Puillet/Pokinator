<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SeTrouver
 *
 * @ORM\Table(name="se_trouver", indexes={@ORM\Index(name="I_FK_SE_TROUVER_ENDROIT", columns={"ID_ENDROIT"}), @ORM\Index(name="I_FK_SE_TROUVER_POKEMON", columns={"ID_POKEMON"})})
 * @ORM\Entity
 */
class SeTrouver
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_ENDROIT", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idEndroit;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_POKEMON", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idPokemon;

    public function getIdEndroit(): ?int
    {
        return $this->idEndroit;
    }

    public function getIdPokemon(): ?int
    {
        return $this->idPokemon;
    }


}
