<?php

namespace App\Core\Documents;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * @ODM\MappedSuperclass()
 */
abstract class AbstractDocument
{
    /**
     * @var string
     * @ODM\Id
     */
    protected $id;

    /**
     * @var \DateTime|null
     * @ODM\Field(type="date")
     */
    protected $createdAt;

    /**
     * @var \DateTime|null
     * @ODM\Field(type="date")
     */
    protected $deletedAt;

    /**
     * AbstractDocument constructor.
     */
    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    /**
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Fake the created at date. Probably only useful in seeds or imports.
     *
     * @param \DateTime $value
     */
    public function setCreatedAt(\DateTime $value)
    {
        $this->createdAt = $value;
    }

    /**
     * @return \DateTime
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }
}