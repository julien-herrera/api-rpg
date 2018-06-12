<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource
 * @ORM\Entity
 */
class Book
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
     * @ORM\Column
     * @Assert\NotBlank
     */
    public $name;

    /**
     * @var string $description Description.
     *
     * @ORM\Column(type="text")
     * @Assert\NotBlank
     */
    public $description;

    /**
     * @var string $protection Protection.
     *
     * @ORM\Column(type="text")
     */
    public $protection;

    /**
     * @var int $countTotalPages Total number of pages.
     * @ORM\Column(type="smallint")
     * @Assert\Type(type="integer")
     */
    public $countTotalPages;

    /**
     * @var int $countUsedPages Total number of used pages.
     * @ORM\Column(type="smallint")
     * @Assert\Type(type="integer")
     */
    public $countUsedPages;
}
