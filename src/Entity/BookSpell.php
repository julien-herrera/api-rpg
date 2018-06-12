<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource
 * @ORM\Entity
 */
class BookSpell
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @var string $book Book.
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Book")
     * @ORM\JoinColumn(name="book_id", referencedColumnName="id")
     */
    public $book;

    /**
     * @var string $spell Spell.
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Spell")
     * @ORM\JoinColumn(name="spell_id", referencedColumnName="id")
     */
    public $spell;
}
