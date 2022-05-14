<?php
require('connection.php');
require('users/users.php');
require('departments/departments.php');
require('candidates/candidates.php');
require('votes/votes.php');


$db=new DBController();
$Users=new Users($db);
$Department=new Department($db);
$Candidates=new Candidates($db);
$Votes=new Votes($db);

// $Students=new Students($db);

