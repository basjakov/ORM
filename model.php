<?php
    include 'run.php';
    include 'querybuilder.php';
    $orm = new  run("localhost","orm","root","");

    $r = array(
        'name'=>'nameaa',
        'lastname'=>'lastnameaa',
        'email'=>'email',
    );



    var_dump(querybuilder::selectdb('users'));

//    $v = array(
//        'name'=>'arman',
//        'lastname'=>'antonyan',
//        'email'=>'arman.antonyan12@gmail.com'
//    );
//    querybuilder::select('users',$k,$v);


?>