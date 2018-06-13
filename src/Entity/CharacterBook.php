<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource
 * @ORM\Entity
 */
class CharacterBook
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
     * @var string $book Book.
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Book")
     * @ORM\JoinColumn(name="book_id", referencedColumnName="id")
     */
    public $book;
}
