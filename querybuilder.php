<?php
/**
 * Created by PhpStorm.
 * User: arman.antonyan
 * Date: 14/11/2019
 * Time: 16:35
 */


/*Query builder like user  class in DataMapper php*/

include 'UserMapper.php';

class QueryBuilder
{

    private $sql = [
        'select' => 'SELECT *',
        'from' => '',
        'where' => '',
        'limit' => ''
    ];

    public function select($field)
    {
        $this->sql['select'] = 'SELECT ' . $field;

        return $this;
    }

    public function from($table)
    {
        $this->sql['from'] = "FROM `$table`";

        return $this;
    }

    public function where($key, $condition, $value)
    {
        $this->sql['where'] = "WHERE `$key` $condition `$value`";

        return $this;
    }

    public function limit($value)
    {
        $this->sql['limit'] = "LIMIT $value";

        return $this;
    }

    public function getSql()
    {
        $sql = '';

        foreach ($this->sql as $part) {
            $sql .= $part . ' ';
        }

        return $sql;
    }
}


class QB {
    public static function __callStatic($name, $args)
    {
        return call_user_func_array([new QueryBuilder(), $name], $args);
    }
}



