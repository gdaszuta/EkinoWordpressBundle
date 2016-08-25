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

/**
 * Class TermMeta.
 *
 * This is the TermMeta entity
 *
 * @author Vincent Composieux <composieux@ekino.com>
 */
abstract class TermMeta implements WordpressEntityInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var Term
     */
    protected $term;

    /**
     * @var string
     */
    protected $key;

    /**
     * @var string
     */
    protected $value;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $key
     *
     * @return TermMeta
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param Term $term
     *
     * @return TermMeta
     */
    public function setTerm(Term $term)
    {
        $this->term = $term;

        return $this;
    }

    /**
     * @return Term
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * @param string $value
     *
     * @return TermMeta
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}
