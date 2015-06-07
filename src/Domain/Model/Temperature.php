<?php

namespace Temperature\Domain\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="temperature")
 */
class Temperature extends AbstractEntity
{
    use DateCreatedTrait;

    /**
     * @var Sensor
     *
     * @ORM\ManyToOne(targetEntity="\Temperature\Domain\Model\Sensor", fetch="EXTRA_LAZY", cascade={"persist"})
     * @ORM\JoinColumn(name="sensor_id", referencedColumnName="id")
     */
    protected $sensor;

    /**
     * Temperature * 10
     * Ex: 26.3C => 263 (in database)
     *
     * @var int
     *
     * @ORM\Column(type="integer", length=4)
     */
    protected $temperature;
}
