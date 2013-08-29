<?php

namespace Autodns\Request\Task\Query;


use Autodns\Request\Task\Query;

class AndQuery implements Query
{
    private $left;

    private $right;

    public function __construct(Query $left, Query $right)
    {
        $this->left = $left;
        $this->right = $right;
    }

    public function asArray()
    {
        return array('and' => array($this->left->asArray(), $this->right->asArray()));
    }
}
