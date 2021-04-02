<?php include "config/general.php"; include "config/images.php"; $pub=True;
function theError($errno, $errstr) {
  include "core/404.php";
}
set_error_handler("theError");
if(isset($_GET["n"])){
  $real_id = number_format($_GET["n"])-1;
  $webtitle = $WEBSITE_NAME.': "'.$data[$real_id][1].'"';
  include "core/includes/header.php";
  $title = $data[$real_id][1];
  $sw = explode(" ", $title);
  $count_sw = count($sw);
  $i = 0;
  $hash = "#";
  while ($i < $count_sw) {
    if (substr($sw[$i], 0, 1) === $hash) {
      $real_tag = str_replace("#", "", $sw[$i]);
      $sw[$i] = "<a href='".$prefix_htag.$real_tag."'>".$sw[$i]."</a>";
    }
    $i++;
  }
  $title = implode(" ", $sw);
  if($data[$real_id][0] == "image") {
    echo "<img class='show' src='".$data[$real_id][3]."' title='".$data[$real_id][1]."'><br>";
  } elseif($data[$real_id][0] == "video") {
    $parts=pathinfo($data[$real_id][3]);
    echo "  <video class='show' poster='".$data[$real_id][3]."' controls><source src='".$data[$real_id][4]."' type='video/".$parts['extension']."'></video><br>";
  }
  echo $title;
  if($WEBSITE_UTTERANCES==True) {
    echo "<br>".$WEBSITE_UTTERANCES_SCRIPT;
  }
  include "core/includes/footer.php";
} else {
  include "core/404.php";
} ?>
