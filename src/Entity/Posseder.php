<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Posseder
 *
 * @ORM\Table(name="posseder", indexes={@ORM\Index(name="I_FK_POSSEDER_POKEMON", columns={"ID_POKEMON"}), @ORM\Index(name="I_FK_POSSEDER_TYPE", columns={"ID_TYPE"})})
 * @ORM\Entity
 */
class Posseder
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_POKEMON", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idPokemon;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_TYPE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idType;

    public function getIdPokemon(): ?int
    {
        return $this->idPokemon;
    }

    public function getIdType(): ?int
    {
        return $this->idType;
    }


}
