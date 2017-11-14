<?php
$myName = $_POST['myName'];
if(!empty($_POST['myName'])){
   echo "welcome : ".$myName;
}
else{
   echo "Enter Name ";
}
?>