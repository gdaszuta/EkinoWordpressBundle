<?php
/*
 * This file is part of the Ekino Wordpress package.
 *
 * (c) 2013 Ekino
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ekino\WordpressBundle\Manager;

use Ekino\WordpressBundle\Entity\Term;
use Ekino\WordpressBundle\Entity\TermMeta;
use Ekino\WordpressBundle\Repository\TermMetaRepository;

/**
 * Class TermMetaManager.
 *
 * This is the TermMeta entity manager
 *
 * @author Vincent Composieux <composieux@ekino.com>
 */
class TermMetaManager extends BaseManager
{
    /**
     * @var TermMetaRepository
     */
    protected $repository;

    /**
     * @param int    $termId         A term identifier
     * @param string $metaName       A meta name
     * @param bool   $fetchOneResult Use fetchOneOrNullResult() method instead of getResult()?
     *
     * @return array|\Ekino\WordpressBundle\Entity\TermMeta
     */
    public function getTermMeta($termId, $metaName, $fetchOneResult = false)
    {
        $query = $this->repository->getTermMetaQuery($termId, $metaName);

        return $fetchOneResult ? $query->getOneOrNullResult() : $query->getResult();
    }
}
