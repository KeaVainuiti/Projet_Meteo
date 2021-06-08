<?php
include 'class/classsalutation.php';

$salu = new trois();

$reponse = $_POST['reponse'];

$res_phrase = $salu->salutation($reponse);
 
echo $res_phrase;