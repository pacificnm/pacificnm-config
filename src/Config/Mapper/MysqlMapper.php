<?php
/**
 * Pacific NM (https://www.pacificnm.com)
 *
 * @link      https://github.com/pacificnm/pnm for the canonical source repository
 * @copyright Copyright (c) 20011-2016 Pacific NM USA Inc. (https://www.pacificnm.com)
 * @license
 */
namespace Config\Mapper;

use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\Sql\Delete;
use Zend\Db\Sql\Insert;
use Zend\Db\Sql\Update;
use Application\Mapper\AbstractMysqlMapper;
use Config\Entity\Entity;
use Zend\Hydrator\HydrationInterface;

class MysqlMapper extends AbstractMysqlMapper implements MysqlMapperInterface
{

    /**
     *
     * @param AdapterInterface $readAdapter            
     * @param AdapterInterface $writeAdapter            
     * @param HydratorInterface $hydrator            
     * @param Entity $prototype            
     */
    public function __construct(AdapterInterface $readAdapter, AdapterInterface $writeAdapter, HydrationInterface $hydrator, Entity $prototype)
    {
        $this->hydrator = $hydrator;
        
        $this->prototype = $prototype;
        
        parent::__construct($readAdapter, $writeAdapter);
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Config\Mapper\MysqlMapperInterface::getAll()
     */
    public function getAll($filter)
    {
        $this->select = $this->readSql->select('config');
        
        $this->filter($filter);
        
        return $this->getPaginator();
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Config\Mapper\MysqlMapperInterface::get()
     */
    public function get($id)
    {
        $this->select = $this->readSql->select('config');
        
        $this->select->where(array(
            'config.config_id = ?' => $id
        ));
        
        return $this->getRow();
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Config\Mapper\MysqlMapperInterface::save()
     */
    public function save(Entity $entity)
    {
        $postData = $this->hydrator->extract($entity);
        
        // if we have id then its an update
        if ($entity->getConfigId()) {
            $this->update = new Update('config');
            
            $this->update->set($postData);
            
            $this->update->where(array(
                'config.config_id = ?' => $entity->getConfigId()
            ));
            
            $this->updateRow();
        } else {
            $this->insert = new Insert('config');
            
            $this->insert->values($postData);
            
            $id = $this->createRow();
            
            $entity->setConfigId($id);
        }
        
        return $this->get($entity->getConfigId());
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Config\Mapper\MysqlMapperInterface::delete()
     */
    public function delete(Entity $entity)
    {
        $this->delete = new Delete('config');
        
        $this->delete->where(array(
            'config.config_id = ?' => $entity->getConfigId()
        ));
        
        return $this->deleteRow();
    }
}