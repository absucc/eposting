<?php include "config/general.php"; include "config/images.php"; $pub=True;
function theError($errno, $errstr) {
  include "core/404.php";
}
set_error_handler("theError");
if(isset($_GET["n"])){
  $real_id = number_format($_GET["n"])-1;
  $titlelol = str_replace("<br>", " ", $data[$real_id][1]);
  $webtitle = $data[$real_id][2].': "'.$titlelol.'" | '.$WEBSITE_NAME;
  include "core/includes/header.php";
  $title = $data[$real_id][1];
  $sw = explode(" ", $title);
  $count_sw = count($sw);
  $i = 0;
  $hash = "#";
  while ($i < $count_sw) {
    if (substr($sw[$i], 0, 1) == $hash) {
      $real_tag = str_replace("#", "", $sw[$i]);
      $sw[$i] = "<a href='".$prefix_htag.$real_tag."'>".$sw[$i]."</a>";
    }
    $i++;
  }
  $title = implode(" ", $sw);
  if($data[$real_id][0] == "image") {
    echo "<img class='show' src='".$data[$real_id][3]."' title='".$data[$real_id][1]."'><br>";
  } elseif($data[$real_id][0] == "video") {
    echo "  <video class='show' poster='".$data[$real_id][2]."' controls><source src='".$data[$real_id][3]."'></video><br>";
  }
  echo $title."<br>\n";
  if($data[$real_id][2]==$WEBSITE_BADGE_STAFF){$staff_badge=" <span style='background:black;color:white;'>STAFF</span>";}else{$staff_badge="";}
  echo "<span class='uploaded'>Uploaded by <a href='https://github.com/".$data[$real_id][2]."'>".$data[$real_id][2]."</a>$staff_badge</span><br><br>\n";
  echo "Short URL: <code style='background:#dddddd;border-radius:1px;'><a href='https://e.l64.repl.co/".$_GET['n']."'>https://e.l64.repl.co/".$_GET['n']."</a></code><br>\n";
  if($WEBSITE_UTTERANCES==True) {
    echo "<br>".$WEBSITE_UTTERANCES_SCRIPT;
  }
  include "core/includes/footer.php";
} else {
  include "core/404.php";
} ?>
