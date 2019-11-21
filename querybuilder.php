<?php
/**
 * Created by PhpStorm.
 * User: arman.antonyan
 * Date: 30/10/2019
 * Time: 17:03
 */

include 'include/where.php';




final class querybuilder
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

        public static function insert($table,array $column,array $row){

                $command = "INSERT INTO $table($column) VALUES ($row)";

                return run::Run($command);

        }


        public static function findid($table,$id){
                                $command = "SELECT * FROM $table WHERE 'id' == $id";
                                return run::Run($command);
        }







}