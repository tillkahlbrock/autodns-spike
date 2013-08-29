<?php

namespace Autodns\Request\Task;


use Autodns\Task;

class DomainListInquiry implements Task
{
    /**
     * @var Key[]
     */
    private $keys;

    /**
     * @var Query
     */
    private $query;

    public function __construct(array $keys, Query $query)
    {
        $this->keys = $keys;
        $this->query = $query;

    }

    public function asArray()
    {
        // TODO: Implement asArray() method.
    }
}
