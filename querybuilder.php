<?php
/**
 * Created by PhpStorm.
 * User: arman.antonyan
 * Date: 30/10/2019
 * Time: 17:03
 */

class querybuilder
{

       public static function select($where,$column = null){
            if(gettype($column) == null){
                $column = "*";
            }
            $command = "select $column from $where";
            return run::Run($command);
        }


}