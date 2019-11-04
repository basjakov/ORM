<?php
    include 'run.php';
    include 'querybuilder.php';
    $orm = new  run("localhost","orm","root","");


    var_dump(querybuilder::insert());
//    $k = array(
//        'name'=>'name',
//        'lastname'=>'lastname',
//        'email'=>'email'
//    );
//    $v = array(
//        'name'=>'arman',
//        'lastname'=>'antonyan',
//        'email'=>'arman.antonyan12@gmail.com'
//    );
//    querybuilder::select('users',$k,$v);


?>