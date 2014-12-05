<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Video as Video;

/**
 * Channel
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Channel
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string")
     * @ORM\Id
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="publishedAt", type="datetime")
     */
    private $publishedAt;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="thumbnails", type="object")
     */
    private $thumbnails;

    /**
     * @var string
     *
     * @ORM\Column(name="uploadPlaylist", type="string", length=255)
     */
    private $uploadPlaylist;

    /**
     * @var Video[]
     *
     * @ORM\OneToMany(targetEntity="Video", mappedBy="channel")
     */
    private $videos;

    /**
     * Set id
     *
     * @param string $id
     * @return Channel
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

     /*
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Channel
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
     * @return Channel
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
     * Set publishedAt
     *
     * @param \DateTime $publishedAt
     * @return Channel
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
     * Set thumbnails
     *
     * @param \stdClass $thumbnails
     * @return Channel
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
     * Set uploadPlaylist
     *
     * @param string $uploadPlaylist
     * @return Channel
     */
    public function setUploadPlaylist($uploadPlaylist)
    {
        $this->uploadPlaylist = $uploadPlaylist;

        return $this;
    }

    /**
     * Get uploadPlaylist
     *
     * @return string
     */
    public function getUploadPlaylist()
    {
        return $this->uploadPlaylist;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->videos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add videos
     *
     * @param Video $videos
     * @return Channel
     */
    public function addVideo(Video $videos)
    {
        $this->videos[] = $video;

        return $this;
    }

    /**
     * Remove videos
     *
     * @param Video $videos
     */
    public function removeVideo(Video $videos)
    {
        $this->videos->removeElement($videos);
    }

    /**
     * Get videos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVideos()
    {
        return $this->videos;
    }
}
