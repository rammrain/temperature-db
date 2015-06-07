<?php

namespace Temperature\Domain\Model;

use Doctrine\ORM\Mapping as ORM;

trait DateCreatedTrait
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime")
     */
    protected $dateCreated;

    /**
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * @ORM\PrePersist
     */
    public function prePersistDateCreated()
    {
        $this->dateCreated = new \DateTime();
    }
}
