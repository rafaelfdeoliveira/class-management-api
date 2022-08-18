<?php

namespace School_class_management_API\Repositories;

use Doctrine\ORM\EntityRepository;

class BaseRepostitory extends EntityRepository
{
    public function begin(): BaseRepostitory
    {
        $this->getEntityManager()->getConnection()->beginTransaction();
        return $this;
    }

    public function commit(): BaseRepostitory
    {
        $this->getEntityManager()->flush();
        $this->getEntityManager()->getConnection()->commit();
        return $this;
    }
}