<?php
    include 'run.php';
    include 'querybuilder.php';
    $orm = new  run("localhost","orm","root","");

    $r = array(
        'name'=>'nameaa',
        'lastname'=>'lastnameaa',
        'email'=>'email',
    );



querybuilder::insert('users',array('name','lastname','email'),array('aaaaaaaarman','pppp','asdasd'));




?>