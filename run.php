<?php
/**
 * Created by PhpStorm.
 * User: arman.antonyan
 * Date: 28/10/2019
 * Time: 16:01
 */

class run
{
       public static $mysql;



        public function __construct($host,$dbname,$dbusername,$dbpassword)
        {
            try{
                self::$mysql = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
                var_dump(self::$mysql);
            }catch (Exception $e){
                echo "Faild".$e->getMessage(PDO::FETCH_ASSOC);
            }
            $pdo=null;
        }


        public static function Run($query){
                return self::$mysql->query($query);
        }




}