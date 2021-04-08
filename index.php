<?php if(isset($_GET["lol"])){echo"<div style='text-align:center'><h1>lololololol</h1>Laught.</div>";}elseif(isset($_GET["htag"])){include "core/htag.php";}elseif(isset($_GET["pub"])){include "core/pub.php";}elseif(isset($_GET["about"])){include "core/about.php";}else{
include "config/general.php"; include "config/images.php"; $webtitle=$WEBSITE_NAME; $pub=False; include "core/includes/header.php";
$a = count($data) -1;
$ao = 0;
$next = $a + 1;
echo "<div class='feed'>\n";
while($ao < count($data)){
  if(strpos($data[$r][1],"'")){$title=str_replace("'", "\\'", $data[$a][1]);}else{$title=$data[$a][1];}
  echo "<a href='$prefix_pub$next'><span class='mini'><img src='".$data[$a][3]."' title='$title'></span></a>";
  $a--; $ao++; $next--;
}

echo "\n</div>\n";
include "core/includes/footer.php"; } ?>
