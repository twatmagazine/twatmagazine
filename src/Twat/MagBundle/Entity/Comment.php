<?php

namespace Twat\MagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Twat\MagBundle\Entity\Repository\CommentRepository")
 * @ORM\Table(name="comment")
 * @ORM\HasLifecycleCallbacks
 */
class Comment
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $user;

    /**
     * @ORM\Column(type="text")
     */
    protected $comment;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $approved;

    /**
     * @ORM\ManyToOne(targetEntity="Blog", inversedBy="comments")
     * @ORM\JoinColumn(name="blog_id", referencedColumnName="id")
     */
    protected $blog;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $created;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $updated;

   public function __construct()
   {
        $this->setCreated();
        $this->setUpdated();

        $this->setApproved(true);
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdated($dateTime = null)
    {
        if ($dateTime === null) {
            $dateTime =  new \DateTime();
        }

        $this->updated = $dateTime;
    }

    /**
     * @ORM\PreUpdate
     */
    public function setCreated($dateTime = null)
    {
        if ($dateTime === null) {
            $dateTime =  new \DateTime();
        }

        $this->created = $dateTime;
    }

    /**
     * Set user
     *
     * @param string $user
     * @return Blog
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Blog
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Set blog
     *
     * @param string $blog
     * @return Blog
     */
    public function setBlog($blog)
    {
        $this->blog = $blog;

        return $this;
    }

    /**
     * Set approved
     *
     * @param string $approved
     * @return approved
     */
    public function setApproved($approved)
    {
        $this->approved = $approved;

        return $this;
    }
}