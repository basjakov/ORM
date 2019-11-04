<?php
/**
 * Created by PhpStorm.
 * User: arman.antonyan
 * Date: 30/10/2019
 * Time: 17:03
 */

class querybuilder
{
       public static function selectdb($dbname){
                $command = "USE $dbname;";
                return run::Run($command);
       }
       public static function select($where,$column = null){
            if(gettype($column) == null){
                $column = "*";
            }
            $command = "select $column from `$where`;";
            return run::Run($command);
        }

        public static function insert($row,$column){
                $command = "INSERT INTO users(name,lastname,email) VALUES ('lorenso','lamas','ujextxa@gmail.com');";
                return run::Run($command);
        }





}