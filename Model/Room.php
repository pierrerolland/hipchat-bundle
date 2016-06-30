<?php

namespace Atlassian\HipchatBundle\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Room model
 *
 * @author Pierre Rolland <roll.pierre@gmail.com>
 */
class Room
{
    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    protected $id;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $name;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $privacy;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $avatarUrl;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $topic;

    /**
     * @var Participant[]
     *
     * @Serializer\Type("array<Atlassian\HipchatBundle\Model\Participant>")
     */
    protected $participants;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $version;

    /**
     * @var Participant
     *
     * @Serializer\Type("Atlassian\HipchatBundle\Model\Participant")
     */
    protected $owner;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getPrivacy()
    {
        return $this->privacy;
    }

    /**
     * @param string $privacy
     */
    public function setPrivacy($privacy)
    {
        $this->privacy = $privacy;
    }

    /**
     * @return string
     */
    public function getAvatarUrl()
    {
        return $this->avatarUrl;
    }

    /**
     * @param string $avatarUrl
     */
    public function setAvatarUrl($avatarUrl)
    {
        $this->avatarUrl = $avatarUrl;
    }

    /**
     * @return string
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * @param string $topic
     */
    public function setTopic($topic)
    {
        $this->topic = $topic;
    }

    /**
     * @return Participant[]
     */
    public function getParticipants()
    {
        return $this->participants;
    }

    /**
     * @param Participant[] $participants
     */
    public function setParticipants($participants)
    {
        $this->participants = $participants;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @return Participant
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param Participant $owner
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
    }
}
