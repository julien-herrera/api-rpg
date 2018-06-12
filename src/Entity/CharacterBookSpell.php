<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource
 * @ORM\Entity
 */
class CharacterBookSpell
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @var string $characterBook CharacterBook.
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\CharacterBook")
     * @ORM\JoinColumn(name="character_book_id", referencedColumnName="id")
     */
    public $characterBook;

    /**
     * @var string $bookSpell BookSpell.
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\BookSpell")
     * @ORM\JoinColumn(name="book_id", referencedColumnName="id")
     */
    public $bookSpell;

    /**
     * @var bool $canUnderstand User can undestand spell.
     *
     * @ORM\Column(type="boolean")
     * @Assert\Type(type="bool")
     */
    public $canUnderstand;

    /**
     * @var bool $isUnderstood User understand spell.
     *
     * @ORM\Column(type="boolean")
     * @Assert\Type(type="bool")
     */
    public $isUnderstood;

    /**
     * @var bool $isFailed User has failed spell understanding.
     *
     * @ORM\Column(type="boolean")
     * @Assert\Type(type="bool")
     */
    public $isFailed;
}
