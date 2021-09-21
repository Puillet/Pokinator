<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtreDesavantage
 *
 * @ORM\Table(name="etre_desavantage", indexes={@ORM\Index(name="I_FK_ETRE_DESAVANTAGE_TYPE_FAIBLE", columns={"ID_TYPE_FAIBLE"}), @ORM\Index(name="I_FK_ETRE_DESAVANTAGE_TYPE_FORT", columns={"ID_TYPE_FORT"})})
 * @ORM\Entity
 */
class EtreDesavantage
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_TYPE_FAIBLE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idTypeFaible;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_TYPE_FORT", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idTypeFort;

    public function getIdTypeFaible(): ?int
    {
        return $this->idTypeFaible;
    }

    public function getIdTypeFort(): ?int
    {
        return $this->idTypeFort;
    }


}
