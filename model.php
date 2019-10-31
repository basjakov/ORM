<?php
    include 'run.php';
    include 'querybuilder.php';
    $orm = new  run("localhost","orm","root","");

    var_dump(querybuilder::select('users','name'));



?>