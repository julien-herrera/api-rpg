<?php

namespace App\Entity\Character;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource
 * @ORM\Entity
 */
class CharacterType
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @var string $character Character.
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Character\Character")
     * @ORM\JoinColumn(name="character_id", referencedColumnName="id")
     */
    public $character;

    /**
     * @var string $class Class.
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Character\Type")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     */
    public $class;

    /**
     * @var string $level Spell level.
     * @ORM\Column(type="smallint")
     * @Assert\Type(type="integer")
     * @Assert\Range(min=1, max=30)
     */
    public $level;
}
