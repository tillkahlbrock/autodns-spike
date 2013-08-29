<?php
namespace Autodns\Request\Task\Query;

use Autodns\Request\Task\Query;

class Parameter implements Query
{
    private $operator;

    private $value;

    public function __construct($operator, $value)
    {
        $this->operator = $operator;
        $this->value = $value;
    }

    public function asArray()
    {
        return array(
            'key' => array(
                'operator' => $this->operator,
                'value' => $this->value

            )
        );
    }
}
