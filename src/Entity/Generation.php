<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Generation
 *
 * @ORM\Table(name="generation")
 * @ORM\Entity
 */
class Generation
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
     * @ORM\Column(name="REGION", type="string", length=128, nullable=false)
     */
    private $region;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(string $region): self
    {
        $this->region = $region;

        return $this;
    }


}
