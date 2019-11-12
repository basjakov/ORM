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
        use subfunc;

       public static function selectdb($dbname){
                $command = "USE $dbname;".subfunc::where();
                return run::Run($command);
       }
       public static function select($where,$column = null){

            if(gettype($column) == null){
                $column = "*";
            }
            $command = "select $column from `$where`;";
            return run::Run($command);
        }

        public function insert($table,array $row ,array $column){

                $command = "INSERT INTO $table($column[$row]) VALUES ($row);";

                return run::Run($command);

        }



        public static function findid($table,$id){
                                $command = "SELECT * FROM $table WHERE 'id' == $id";
                                return run::Run($command);
        }



}