<?php

namespace Ekino\WordpressBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;

interface PostInterface
{
    public function setAuthor(User $author);

    /**
     * @return User
     */
    public function getAuthor();

    /**
     * @param int $commentCount
     *
     * @return Post
     */
    public function setCommentCount($commentCount);

    /**
     * @return int
     */
    public function getCommentCount();

    /**
     * @param string $content
     *
     * @return Post
     */
    public function setContent($content);

    /**
     * @return string
     */
    public function getContent();

    /**
     * @param string $contentFiltered
     *
     * @return Post
     */
    public function setContentFiltered($contentFiltered);

    /**
     * @return string
     */
    public function getContentFiltered();

    /**
     * @param \DateTime $date
     *
     * @return Post
     */
    public function setDate($date);

    /**
     * @return \DateTime
     */
    public function getDate();

    /**
     * @param \DateTime $dateGmt
     *
     * @return Post
     */
    public function setDateGmt($dateGmt);

    /**
     * @return \DateTime
     */
    public function getDateGmt();
    /**
     * @param string $excerpt
     *
     * @return Post
     */
    public function setExcerpt($excerpt);

    /**
     * @return string
     */
    public function getExcerpt();

    /**
     * @param string $guid
     *
     * @return Post
     */
    public function setGuid($guid);

    /**
     * @return string
     */
    public function getGuid();

    /**
     * @param int $menuOrder
     *
     * @return Post
     */
    public function setMenuOrder($menuOrder);

    /**
     * @return int
     */
    public function getMenuOrder();

    /**
     * @param string $mimeType
     *
     * @return Post
     */
    public function setMimeType($mimeType);

    /**
     * @return string
     */
    public function getMimeType();

    /**
     * @param \DateTime $modified
     *
     * @return Post
     */
    public function setModified($modified);

    /**
     * @return \DateTime
     */
    public function getModified();

    /**
     * @param \DateTime $modifiedGmt
     *
     * @return Post
     */
    public function setModifiedGmt($modifiedGmt);

    /**
     * @return \DateTime
     */
    public function getModifiedGmt();

    /**
     * @param string $name
     *
     * @return Post
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param int $parent
     *
     * @return Post
     */
    public function setParent($parent);

    /**
     * @return int
     */
    public function getParent();

    /**
     * @param string $password
     *
     * @return Post
     */
    public function setPassword($password);

    /**
     * @return string
     */
    public function getPassword();

    /**
     * @param string $status
     *
     * @return Post
     */
    public function setStatus($status);

    /**
     * @return string
     */
    public function getStatus();

    /**
     * @param string $commentStatus
     *
     * @return Post
     */
    public function setCommentStatus($commentStatus);

    /**
     * @return string
     */
    public function getCommentStatus();

    /**
     * @param string $pingStatus
     *
     * @return Post
     */
    public function setPingStatus($pingStatus);

    /**
     * @return string
     */
    public function getPingStatus();

    /**
     * @param string $pinged
     *
     * @return Post
     */
    public function setPinged($pinged);

    /**
     * @return string
     */
    public function getPinged();

    /**
     * @param string $title
     *
     * @return Post
     */
    public function setTitle($title);

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @param string $toPing
     *
     * @return Post
     */
    public function setToPing($toPing);

    /**
     * @return string
     */
    public function getToPing();

    /**
     * @param string $type
     *
     * @return Post
     */
    public function setType($type);

    /**
     * @return string
     */
    public function getType();

    /**
     * @param ArrayCollection $metas
     *
     * @return Post
     */
    public function setMetas(ArrayCollection $metas);

    /**
     * @return ArrayCollection
     */
    public function getMetas();

    /**
     * @param PostMeta $meta
     *
     * @return Post
     */
    public function addMeta(PostMeta $meta);

    /**
     * @param PostMeta $meta
     *
     * @return Post
     */
    public function removeMeta(PostMeta $meta);

    /**
     * @param string $name
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMetaByKey($name);

    /**
     * Returns user meta value from a meta key name.
     *
     * @param string $name
     *
     * @return string|null
     */
    public function getMetaValue($name);

    /**
     * @return ArrayCollection
     */
    public function getComments();

    /**
     * @param Comment $comment
     *
     * @return Post
     */
    public function addComment(Comment $comment);

    /**
     * @param Comment $comment
     *
     * @return Post
     */
    public function removeComment(Comment $comment);

    /**
     * @return ArrayCollection
     */
    public function getTermRelationships();

    /**
     * @param TermRelationships $relationship
     *
     * @return Post
     */
    public function addTermRelationship(TermRelationships $relationship);

    /**
     * @param TermRelationships $relationship
     *
     * @return Post
     */
    public function removeTermRelationship(TermRelationships $relationship);

    /**
     * @param string $type
     *
     * @return ArrayCollection|null
     */
    public function getTaxonomiesByType($type);

    /**
     * @param $type
     *
     * @return ArrayCollection|null
     */
    public function getTermsByType($type);

    /**
     * @return ArrayCollection
     */
    public function getTags();

    /**
     * @return ArrayCollection
     */
    public function getCategories();

    /**
     * @return Term
     */
    public function getCategory();

    /**
     * @return bool
     */
    public function isCommentingOpened();

}