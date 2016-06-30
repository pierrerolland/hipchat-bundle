<?php

namespace Atlassian\HipchatBundle\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Message model
 *
 * @author Pierre Rolland <roll.pierre@gmail.com>
 */
class Message
{
    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    protected $id;

    /**
     * @var Participant
     *
     * @Serializer\Type("Atlassian\HipchatBundle\Model\Participant")
     */
    protected $from;

    /**
     * @var File
     *
     * @Serializer\Type("Atlassian\HipchatBundle\Model\File")
     */
    protected $file;

    /**
     * @var \DateTime
     *
     * @Serializer\Type("DateTime")
     */
    protected $date;

    /**
     * @var Participant[]
     *
     * @Serializer\Type("array<Atlassian\HipchatBundle\Model\Participant>")
     */
    protected $mentions;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $message;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $type;

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
     * @return Participant
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param Participant $from
     */
    public function setFrom($from)
    {
        $this->from = $from;
    }

    /**
     * @return File
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param File $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return Participant[]
     */
    public function getMentions()
    {
        return $this->mentions;
    }

    /**
     * @param Participant[] $mentions
     */
    public function setMentions($mentions)
    {
        $this->mentions = $mentions;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
}
