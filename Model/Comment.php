<?php
/*
 * This file is part of the Ekino Wordpress package.
 *
 * (c) 2013 Ekino
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ekino\WordpressBundle\Model;

use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Class Comment.
 *
 * This is the Comment entity
 *
 * @author Vincent Composieux <composieux@ekino.com>
 */
abstract class Comment implements WordpressEntityInterface, WordpressContentInterface
{
    const TYPE_PINGBACK = 'pingback';
    const TYPE_TRACKBACK = 'trackback';

    const APPROVED_PENDING = 0;
    const APPROVED_APPROVED = 1;
    const APPROVED_POST_TRASHED = 'post-trashed';
    const APPROVED_SPAM = 'spam';
    const APPROVED_TRASH = 'trash';

    /**
     * @var int
     */
    protected $id;

    /**
     * @var Post
     */
    protected $post;

    /**
     * @var string
     */
    protected $author;

    /**
     * @var string
     */
    protected $authorEmail = '';

    /**
     * @var string
     */
    protected $authorUrl = '';

    /**
     * @var string
     */
    protected $authorIp = '';

    /**
     * @var \DateTime
     */
    protected $date;

    /**
     * @var \DateTime
     */
    protected $dateGmt;

    /**
     * @var string
     */
    protected $content;

    /**
     * @var int
     */
    protected $karma = 0;

    /**
     * @var string
     */
    protected $approved = 1;

    /**
     * @var string
     */
    protected $agent = '';

    /**
     * @var string
     */
    protected $type = '';

    /**
     * @var int
     */
    protected $parent = 0;

    /**
     * @var User
     */
    protected $user = 0;

    public function __construct()
    {
        $this->date = new \DateTime();
        $this->dateGmt = new \DateTime();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $agent
     *
     * @return Comment
     */
    public function setAgent($agent)
    {
        $this->agent = $agent;

        return $this;
    }

    /**
     * @return string
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * @param string $approved
     *
     * @return Comment
     */
    public function setApproved($approved)
    {
        $this->approved = $approved;

        return $this;
    }

    /**
     * @return string
     */
    public function getApproved()
    {
        return $this->approved;
    }

    /**
     * @param string $author
     *
     * @return Comment
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param string $authorEmail
     *
     * @return Comment
     */
    public function setAuthorEmail($authorEmail)
    {
        $this->authorEmail = $authorEmail;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthorEmail()
    {
        return $this->authorEmail;
    }

    /**
     * @param string $authorIp
     *
     * @return Comment
     */
    public function setAuthorIp($authorIp)
    {
        $this->authorIp = $authorIp;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthorIp()
    {
        return $this->authorIp;
    }

    /**
     * @param string $authorUrl
     *
     * @return Comment
     */
    public function setAuthorUrl($authorUrl)
    {
        $this->authorUrl = $authorUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthorUrl()
    {
        return $this->authorUrl;
    }

    /**
     * @param string $content
     *
     * @return Comment
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param \DateTime $date
     *
     * @return Comment
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $dateGmt
     *
     * @return Comment
     */
    public function setDateGmt($dateGmt)
    {
        $this->dateGmt = $dateGmt;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateGmt()
    {
        return $this->dateGmt;
    }

    /**
     * @param int $karma
     *
     * @return Comment
     */
    public function setKarma($karma)
    {
        $this->karma = $karma;

        return $this;
    }

    /**
     * @return int
     */
    public function getKarma()
    {
        return $this->karma;
    }

    /**
     * @param int $parentId
     *
     * @return Comment
     */
    public function setParent($parentId)
    {
        $this->parent = $parentId;

        return $this;
    }

    /**
     * @return int
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param PostInterface $post
     *
     * @return Comment
     */
    public function setPost(PostInterface $post)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * @return PostInterface
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * @param string $type
     *
     * @return Comment
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param UserInterface $user
     *
     * @return Comment
     */
    public function setUser(UserInterface $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return bool
     */
    public function isPingback()
    {
        return static::TYPE_PINGBACK == $this->getType();
    }

    /**
     * @return bool
     */
    public function isTrackback()
    {
        return static::TYPE_TRACKBACK == $this->getType();
    }
}
