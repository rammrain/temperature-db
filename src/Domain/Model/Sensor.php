<?php

namespace Temperature\Domain\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="sensor")
 */
class Sensor extends AbstractEntity
{
    /**
     * @var string
     *
     * @ORM\Column(length=50)
     */
    protected $serial;

    /**
     * @var string
     *
     * @ORM\Column(length=40)
     */
    protected $name;
}
