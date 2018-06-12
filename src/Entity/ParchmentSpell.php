<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource
 * @ORM\Entity
 */
class ParchmentSpell
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @var string $parchment Parchment.
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Parchment")
     * @ORM\JoinColumn(name="parchment_id", referencedColumnName="id")
     */
    public $parchment;

    /**
     * @var string $spell Spell.
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Spell")
     * @ORM\JoinColumn(name="spell_id", referencedColumnName="id")
     */
    public $spell;

    /**
     * @var bool $isUsed Is used.
     *
     * @ORM\Column(type="boolean")
     * @Assert\Type(type="bool")
     */
    public $isUsed;
}
