<?php include "config/general.php"; include "config/images.php"; $pub=True;
function theError($errno, $errstr) {
  include "404.php";
}
set_error_handler("theError");
if(isset($_GET["t"])){
  $a = 0;
  $next = 1;
  $string = strtolower($_GET["t"]);
  $webtitle = '#'.$string." | ".$WEBSITE_NAME;

  include "includes/header.php";
  echo "<div class='feed'>";
  while($a < count($data)){
    $title = strtolower($data[$a][1]);
    $sw = explode(" ", $title);
    $count_sw = count($sw);
    $i = 0;
    $hash = "#".$string;
    while ($i < $count_sw) {
      if (substr($sw[$i], 0, number_format(strlen($_GET["t"])) + 1) === $hash) {
        if(strpos($data[$r][1],"'")){$title=str_replace("'", "\\'", $data[$a][1]);}else{$title=$data[$a][1];}
        echo "<a href='$prefix_pub$next'><span class='mini'><img src='".$data[$a][3]."' title='$title'></span></a>";
      }
      $i++;
    }
    $a++; $next++;
  }
  echo "\n</div>";
  include "core/includes/footer.php";
} else {
  include "core/404.php";
} ?>
