<?php

namespace App\HighScore\Documents;

use App\Core\Documents\AbstractDocument;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * @ODM\Document
 */
class HighScoreRecord extends AbstractDocument
{
    /**
     * @var int
     * @ODM\Field(type="int")
     */
    protected $score;

    /**
     * @var int
     * @ODM\Field(type="int")
     */
    protected $time;

    /**
     * @var string
     * @ODM\Field(type="string")
     */
    protected $userName;

    /**
     * @var string
     * @ODM\Field(type="string")
     */
    protected $steamId;

    /**
     * @return int
     */
    public function getScore(): ?int
    {
        return $this->score;
    }

    /**
     * @param int $score
     */
    public function setScore(?int $score)
    {
        $this->score = $score;
    }

    /**
     * @return int
     */
    public function getTime(): ?int
    {
        return $this->time;
    }

    /**
     * @param int $time
     */
    public function setTime(?int $time)
    {
        $this->time = $time;
    }

    /**
     * @return string
     */
    public function getUserName(): ?string
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     */
    public function setUserName(?string $userName)
    {
        $this->userName = $userName;
    }

    /**
     * @return string
     */
    public function getSteamId(): ?string
    {
        return $this->steamId;
    }

    /**
     * @param string $steamId
     */
    public function setSteamId(?string $steamId)
    {
        $this->steamId = $steamId;
    }
}