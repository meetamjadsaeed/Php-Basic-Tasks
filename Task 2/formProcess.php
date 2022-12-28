<?php

$errorMSG = "";



if (preg_match("/^[A-Z,a-z]{2,8}$/", $_POST["name"]))
{
  $errorMSG = "<li>Password is weak please input strong password</<li>";
}

elseif (preg_match("/^[A-Z,a-z,0-9]{2,8}$/", $_POST["name"])) {
 $errorMSG = "<li>Password is medium please input strong password</<li>";
}

elseif (preg_match("/^[A-Z,a-z,0-9,@]{2,8}$/", $_POST["name"])) {
 $errorMSG = "<li>Password is strong </<li>";
}

else
{
 $errorMSG = "<li>doesn't match any scenrio </<li>"; 
}





if(empty($errorMSG)){
  $msg = "Name: ".$name;
  echo json_encode(['code'=>200, 'msg'=>$msg]);
  exit;
}


echo json_encode(['code'=>404, 'msg'=>$errorMSG]);


?>