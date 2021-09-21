<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtreEfficace
 *
 * @ORM\Table(name="etre_efficace", indexes={@ORM\Index(name="I_FK_ETRE_EFFICACE_TYPE", columns={"ID_TYPE_FORT"}), @ORM\Index(name="I_FK_ETRE_EFFICACE_TYPE1", columns={"ID_TYPE_FAIBLE"})})
 * @ORM\Entity
 */
class EtreEfficace
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_TYPE_FORT", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idTypeFort;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_TYPE_FAIBLE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idTypeFaible;

    public function getIdTypeFort(): ?int
    {
        return $this->idTypeFort;
    }

    public function getIdTypeFaible(): ?int
    {
        return $this->idTypeFaible;
    }


}
