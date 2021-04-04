<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
<meta charset="utf-8">
<title><?php echo $webtitle ?></title>
<link rel="shortcut icon" href="<?php echo $WEBSITE_PROFILE_URL ?>">
<link rel="stylesheet" href="core/css/styles.css">
<link rel="stylesheet" href="config/custom.css">
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="?rss">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="main-content">
<header>
<?php if($WEBSITE_HTACCESS==True){$prefix_pub="p'";}else{$prefix_pub="?pub&n=";}
if($WEBSITE_HTACCESS==True){$prefix_htag="h'";}else{$prefix_htag="?htag&t=";}
if($pub==True) {
  if($WEBSITE_PROFILE_URL!=False){$webphotofinal='<img style="border-radius:100%;width:20px;height:20px;" src="'.$WEBSITE_PROFILE_URL.'"> ';}else{$webphotofinal="";}
  echo "<a href=\"?\" class=\"pub\"><p><--   $webphotofinal$WEBSITE_NAME</p></a>";
} else {
  if($WEBSITE_PROFILE_URL!=False){$webphotofinal='<img style="border-radius:100%;width:50px;height:50px;" src="'.$WEBSITE_PROFILE_URL.'"> ';}else{$webphotofinal="";}
  echo "<h1>$webphotofinal$WEBSITE_NAME</h1>";
  echo '<a href="https://github.com/absucc/eposting/discussions">Forum</a> - <a rel="me" href="https://banana.dog/@e">Mastodon</a> - <a href="https://github.com/absucc/eposting">Collaborate</a>';
  if($WEBSITE_DESCRIPTION!=False){echo"<p id='description'>$WEBSITE_DESCRIPTION</p>";}
  if($WEBSITE_WEBSITE!=False){echo "<a href=\"$WEBSITE_WEBSITE\">$WEBSITE_WEBSITE</a><br>";}
  if($WEBSITE_EMAIL!=False){$WEBSITE_EMAIL=strtolower($WEBSITE_EMAIL);echo "<a href=\"mailto:$WEBSITE_EMAIL\">$WEBSITE_EMAIL</a><br>";}
} ?>

</header>
<main>
