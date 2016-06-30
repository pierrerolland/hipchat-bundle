<?php

namespace Atlassian\HipchatBundle\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Participant model
 *
 * @author Pierre Rolland <roll.pierre@gmail.com>
 */
class Participant
{
    /**
     * @var integer
     *
     * @Serializer\Type("integer")
     */
    protected $id;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $version;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("mention_name")
     */
    protected $mentionName;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $name;

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
     * @return string
     */
    public function getMentionName()
    {
        return $this->mentionName;
    }

    /**
     * @param string $mentionName
     */
    public function setMentionName($mentionName)
    {
        $this->mentionName = $mentionName;
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
}
