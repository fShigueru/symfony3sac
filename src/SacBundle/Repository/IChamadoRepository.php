<?php

namespace SacBundle\Repository;


use SacBundle\Entity\IChamado;

interface IChamadoRepository
{
    /**
     * @param IChamado $entity
     * @param $pag
     * @param $limit
     * @return mixed
     */
    public function busca(IChamado $entity, $pag, $limit);

    /**
     * @param $dql
     * @param int $page
     * @param int $limit
     * @return mixed
     */
    public function paginate($dql, $page = 1, $limit = 5);
}