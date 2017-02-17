<?php

namespace Ekino\WordpressBundle\Model;

interface CommentInterface
{
    /**
     * @return int
     */
    public function getId();

    /**
     * @param string $agent
     *
     * @return Comment
     */
    public function setAgent($agent);

    /**
     * @return string
     */
    public function getAgent();

    /**
     * @param string $approved
     *
     * @return Comment
     */
    public function setApproved($approved);

    /**
     * @return string
     */
    public function getApproved();

    /**
     * @param string $author
     *
     * @return Comment
     */
    public function setAuthor($author);

    /**
     * @return string
     */
    public function getAuthor();

    /**
     * @param string $authorEmail
     *
     * @return Comment
     */
    public function setAuthorEmail($authorEmail);

    /**
     * @return string
     */
    public function getAuthorEmail();

    /**
     * @param string $authorIp
     *
     * @return Comment
     */
    public function setAuthorIp($authorIp);
    /**
     * @return string
     */
    public function getAuthorIp();

    /**
     * @param string $authorUrl
     *
     * @return Comment
     */
    public function setAuthorUrl($authorUrl);

    /**
     * @return string
     */
    public function getAuthorUrl();

    /**
     * @param string $content
     *
     * @return Comment
     */
    public function setContent($content);

    /**
     * @return string
     */
    public function getContent();

    /**
     * @param \DateTime $date
     *
     * @return Comment
     */
    public function setDate($date);

    /**
     * @return \DateTime
     */
    public function getDate();

    /**
     * @param \DateTime $dateGmt
     *
     * @return Comment
     */
    public function setDateGmt($dateGmt);

    /**
     * @return \DateTime
     */
    public function getDateGmt();

    /**
     * @param int $karma
     *
     * @return Comment
     */
    public function setKarma($karma);

    /**
     * @return int
     */
    public function getKarma();

    /**
     * @param CommentInterface $parent
     *
     * @return Comment
     */
    public function setParent(CommentInterface $parent);

    /**
     * @return int
     */
    public function getParent();


    /**
     * @param PostInterface $post
     *
     * @return Comment
     */
    public function setPost(PostInterface $post);

    /**
     * @return PostInterface
     */
    public function getPost();

    /**
     * @param string $type
     *
     * @return Comment
     */
    public function setType($type);

    /**
     * @return string
     */
    public function getType();

    /**
     * @param User $user
     *
     * @return Comment
     */
    public function setUser(User $user);

    /**
     * @return User
     */
    public function getUser();

    /**
     * @return bool
     */
    public function isPingback();

    /**
     * @return bool
     */
    public function isTrackback();
}
