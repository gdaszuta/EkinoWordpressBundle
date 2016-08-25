<?php
/*
 * This file is part of the Ekino Wordpress package.
 *
 * (c) 2013 Ekino
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ekino\WordpressBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Class TermMetaRepository.
 *
 * This is the repository of the TermMeta entity
 *
 * @author Vincent Composieux <composieux@ekino.com>
 */
class TermMetaRepository extends EntityRepository
{
    /**
     * @param int    $termId
     * @param string $metaName
     *
     * @return \Doctrine\ORM\Query
     */
    public function getTermMetaQuery($termId, $metaName)
    {
        return $this->createQueryBuilder('m')
            ->innerJoin('m.term', 'p')
            ->where('m.key = :metaName')
            ->andWhere('p.id = :termId')
            ->setParameter('termId', $termId)
            ->setParameter('metaName', $metaName)
            ->getQuery();
    }
}
