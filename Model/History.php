<?php

namespace Atlassian\HipchatBundle\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * History model
 *
 * @author Pierre Rolland <roll.pierre@gmail.com>
 */
class History
{
    /**
     * @var Message[]
     *
     * @Serializer\Type("array<Atlassian\HipchatBundle\Model\Message>")
     */
    protected $items;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    protected $startIndex;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    protected $maxResults;

    /**
     * @return Message[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param Message[] $items
     */
    public function setItems($items)
    {
        $this->items = $items;
    }

    /**
     * @return int
     */
    public function getStartIndex()
    {
        return $this->startIndex;
    }

    /**
     * @param int $startIndex
     */
    public function setStartIndex($startIndex)
    {
        $this->startIndex = $startIndex;
    }

    /**
     * @return int
     */
    public function getMaxResults()
    {
        return $this->maxResults;
    }

    /**
     * @param int $maxResults
     */
    public function setMaxResults($maxResults)
    {
        $this->maxResults = $maxResults;
    }
}
