<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Channel as Channel;

/**
 * Video
 *
 * @ORM\Table(indexes={@ORM\Index(name="timestamp_idx", columns={"publishedAt"})})
 * @ORM\Entity
 */
class Video
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string")
     * @ORM\Id
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="publishedAt", type="datetime")
     */
    private $publishedAt;

    /**
     * @var Channel
     *
     * @ORM\ManyToOne(targetEntity="Channel", inversedBy="videos")
     */
    private $channel;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="thumbnails", type="object")
     */
    private $thumbnails;

    /**
     * @var integer
     *
     * @ORM\Column(name="duration", type="integer")
     */
    private $duration;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isHD", type="boolean")
     */
    private $isHD;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hasCaptions", type="boolean")
     */
    private $hasCaptions;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isEmbeddable", type="boolean")
     */
    private $isEmbeddable;

    /**
     * @var string
     *
     * @ORM\Column(name="embedHtml", type="text")
     */
    private $embedHtml;

    /**
     * Set id
     *
     * @param string $id
     * @return Video
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set publishedAt
     *
     * @param \DateTime $publishedAt
     * @return Video
     */
    public function setPublishedAt($publishedAt)
    {
        $this->publishedAt = $publishedAt;

        return $this;
    }

    /**
     * Get publishedAt
     *
     * @return \DateTime
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    /**
     * Set channel
     *
     * @param Channel $channel
     * @return Video
     */
    public function setChannel(Channel $channel)
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * Get channel
     *
     * @return Channel
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Video
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Video
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set thumbnails
     *
     * @param \stdClass $thumbnails
     * @return Video
     */
    public function setThumbnails($thumbnails)
    {
        $this->thumbnails = $thumbnails;

        return $this;
    }

    /**
     * Get thumbnails
     *
     * @return \stdClass
     */
    public function getThumbnails()
    {
        return $this->thumbnails;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     * @return Video
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set hd
     *
     * @param boolean $hd
     * @return Video
     */
    public function setHd($hd)
    {
        $this->isHD = $hd;

        return $this;
    }

    /**
     * Is hd
     *
     * @return boolean
     */
    public function isHd()
    {
        return $this->isHD;
    }

    /**
     * Set captions
     *
     * @param boolean $captions
     * @return Video
     */
    public function setCaptions($captions)
    {
        $this->hasCaptions = $captions;

        return $this;
    }

    /**
     * Has captions
     *
     * @return boolean
     */
    public function hasCaptions()
    {
        return $this->hasCaptions;
    }

    /**
     * Set embeddable
     *
     * @param boolean $embeddable
     * @return Video
     */
    public function setEmbeddable($embeddable)
    {
        $this->isEmbeddable = $embeddable;

        return $this;
    }

    /**
     * Get embeddable
     *
     * @return boolean
     */
    public function isEmbeddable()
    {
        return $this->isEmbeddable;
    }

    /**
     * Set embedHtml
     *
     * @param string $embedHtml
     * @return Video
     */
    public function setEmbedHtml($embedHtml)
    {
        $this->embedHtml = $embedHtml;

        return $this;
    }

    /**
     * Get embedHtml
     *
     * @return string
     */
    public function getEmbedHtml()
    {
        return $this->embedHtml;
    }
}
