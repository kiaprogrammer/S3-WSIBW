<?php 
include ("OOP_name.php");

$stefan = new person();
$jimmy = new person();

$stefan->set_name("Stefan Mischook");
$jimmy->set_name("Nick Waddles");

// directly accessing properties in a class is a n0-no
echo "Stefan's full name: ".$stefan->name;
?>