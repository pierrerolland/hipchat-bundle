<?php

namespace Atlassian\HipchatBundle\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * File model
 *
 * @author Pierre Rolland <roll.pierre@gmail.com>
 */
class File
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $url;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("thumb_url")
     */
    protected $thumbUrl;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    protected $name;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     */
    protected $size;

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getThumbUrl()
    {
        return $this->thumbUrl;
    }

    /**
     * @param string $thumbUrl
     */
    public function setThumbUrl($thumbUrl)
    {
        $this->thumbUrl = $thumbUrl;
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
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }
}
