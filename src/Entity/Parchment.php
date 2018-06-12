<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource
 * @ORM\Entity
 */
class Parchment
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @var string $description Description.
     *
     * @ORM\Column(type="text")
     */
    public $description;

    /**
     * @var int $countTotalLevels Total number of spell levels available.
     * @ORM\Column(type="smallint")
     * @Assert\Type(type="integer")
     */
    public $countTotalLevels;

    /**
     * @var int $countUsedLevels Total number of used spell levels.
     * @ORM\Column(type="smallint")
     * @Assert\Type(type="integer")
     */
    public $countUsedLevels;
}
