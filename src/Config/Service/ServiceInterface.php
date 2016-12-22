<?php
/**
 * Pacific NM (https://www.pacificnm.com)
 *
 * @link      https://github.com/pacificnm/pnm for the canonical source repository
 * @copyright Copyright (c) 20011-2016 Pacific NM USA Inc. (https://www.pacificnm.com)
 * @license
 */
namespace Config\Service;

use Zend\Paginator\Paginator;
use Config\Entity\Entity;


interface ServiceInterface
{
    /**
     *
     * @param array $filter
     * @return Paginator
     */
    public function getAll($filter);
    
    /**
     *
     * @param number $id
     * @return Entity
     */
    public function get($id);
    
    /**
     *
     * @param Entity $entity
     * @return Entity
     */
    public function save(Entity $entity);
    
    /**
     *
     * @param Entity $entity
     * @return boolean
     */
    public function delete(Entity $entity);
}