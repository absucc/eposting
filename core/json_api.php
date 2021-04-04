<?php include "config/images.php"; header("Content-type: application/json");
if(isset($_GET["random"])){
  $r = rand(count($data));
  if($data[$r][0]=="video"){$video=",'video':'".$data[$r][4]."'";}else{$video="";}
  echo "{'type':'video','image':'".$data[$r][3]."'$video}";
} ?>
