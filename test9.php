<?php
require "db.php" ;

$mode = $_GET["case_label"];
switch ($mode) {
 case 'insert':
  $sql = "insert into accounts (email, fname, lname,phone, birthday,
  gender,password) values ('maa222@njit.edu','Michele', 'Anies','973-333-3333','1994-23-01','Female','pusheen11);";
  $results = runQuery($sql);
  header("Location: index.php");
  break;
  
 case 'delete':
  $fname = 'Michele';
  $sql ="delete from accounts where fname = '$fname' ";
  $results = runQuery($sql);
  header("Location: index.php");
  break;

 case 'update':
  $fname = 'Michele';
  $sql ="update accounts set password = 'chambers11' where fname = '$fname' ";
  $results = runQuery($sql);
  header("Location: index.php");
  break;
}