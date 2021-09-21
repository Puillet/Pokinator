<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Endroit
 *
 * @ORM\Table(name="endroit")
 * @ORM\Entity
 */
class Endroit
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
     * @ORM\Column(name="ENDROIT", type="string", length=128, nullable=false)
     */
    private $endroit;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEndroit(): ?string
    {
        return $this->endroit;
    }

    public function setEndroit(string $endroit): self
    {
        $this->endroit = $endroit;

        return $this;
    }


}
