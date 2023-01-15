<?php

namespace App\structural_mode\fluent;

class Sql
{
    /**
     * @var array|mixed
     */
    private $fields;
    private $where;
    private $from;

    public function select($filed = [])
    {
        $this->fields = $filed;
        return $this;
    }

    public function where($condition)
    {
        $this->where[] = $condition;
        return $this;
    }

    public function from($table, $alias)
    {
        $this->from[] = $table . ' AS ' . $alias;

        return $this;
    }

    public function getQuery()
    {
        return 'SELECT ' . implode(',', $this->fields)
            . ' FROM ' . implode(',', $this->from)
            . ' WHERE ' . implode(' AND ', $this->where);
    }
}