<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints as Assert;

use App\Entity\Character\Type;

/**
 * @ApiResource
 * @ORM\Entity
 */
class Spell
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @var string $name A name property - this description will be available in the API documentation too.
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     */
    public $name;

    /**
     * @var string $level Spell level.
     * @ORM\Column(type="smallint")
     * @Assert\Type(type="integer")
     * @Assert\Range(min=1, max=10)
     */
    public $level;

    /**
     * @var string $class Class.
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Character\Type")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     */
    public $class;

    /**
     * @var string $schools Schools.
     *
     * @ORM\ManyToOne(targetEntity="School")
     * @ORM\JoinColumn(name="school_id", referencedColumnName="id")
     */
    public $schools;

    /**
     * @var string $spheres Spheres.
     *
     * @ORM\ManyToOne(targetEntity="Sphere")
     * @ORM\JoinColumn(name="sphere_id", referencedColumnName="id")
     */
    public $spheres;

    /**
     * @var string $source Source.
     *
     * @ORM\ManyToOne(targetEntity="Source")
     * @ORM\JoinColumn(name="source_id", referencedColumnName="id")
     */
    public $source;

    /**
     * @var string $components Composantes.
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     */
    public $components;

    /**
     * @var bool $isReversible Description.
     *
     * @ORM\Column(type="boolean")
     * @Assert\Type(type="bool")
     */
    public $isReversible;

    /**
     * @var string $range Description.
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     */
    public $range;

    /**
     * @var string $duration Description.
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     */
    public $duration;

    /**
     * @var string $area Description.
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     */
    public $area;

    /**
     * @var string $time Description.
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     */
    public $time;

    /**
     * @var string $save Description.
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     */
    public $save;

    /**
     * @var string $description Description.
     *
     * @ORM\Column(type="text")
     * @Assert\NotBlank
     */
    public $description;

    /**
     * @var string $correction Description.
     *
     * @ORM\Column(type="text")
     */
    public $correction;
}
