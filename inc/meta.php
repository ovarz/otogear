<head>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0T54M6VKLW"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-0T54M6VKLW');
</script>
<title><?php echo $site_title; ?></title>
<meta charset="utf-8">
<meta name="robots" content="index, follow">	
<meta name="googlebot" content="all"/>
<meta name="googlebot-news" content="index,follow"/>
<meta name="googlebot-image" content="index,follow"/>
<meta name="google-site-verification" content=""/>
<meta name="google-adsense-account" content="ca-pub-2668036865178896">
<meta content="<?php echo $site_name; ?>" name="author"/>
<meta content="id" name="language"/>
<meta content="id" name="geo.country"/>
<meta content="Indonesia" name="geo.placename"/>
<meta http-equiv="content-language" content="In-Id"/>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="HandheldFriendly" content="true"/>
<meta name="apple-touch-fullscreen" content="yes"/>
<meta name="copyright" content="2023 | <?php echo $site_name; ?>">

<meta name="description" content="<?php echo $site_desc; ?>">
<meta name="keywords" content="Otomotif, Mobil, Motor, Review"/>
<meta name="news_keywords" content="Otomotif, Mobil, Motor, Review"/>

<meta property="fb:app_id" content=""/>
<meta property="og:type" content="article"/>
<meta property="og:url" content="<?php echo $site_url; ?>/"/>
<meta property="og:title" content="<?php echo $site_title; ?>"/>
<meta property="og:image" content="<?php echo $site_url; ?>/img/content/content-0.jpg?<?php echo $anticache; ?>"/>
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:width" content="1920">
<meta property="og:image:height" content="1080">
<meta property="og:description" content="<?php echo $site_desc; ?>"/>

<!--
<meta name="twitter:image:src" content="<php echo $site_url; ?>/img/content/content-0.jpg"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:site" content="@OtoGear"/>
<meta name="twitter:site:id" content="@OtoGear"/>
<meta name="twitter:creator" content="@OtoGear"/>
<meta name="twitter:description" content="<php echo $video_desc; ?>"/>
-->

<link rel="preconnect" href="<?php echo $site_url; ?>">
<link rel="dns-prefetch" href="<?php echo $site_url; ?>"/>
<link rel="preconnect" href="https://ajax.googleapis.com">
<link rel="dns-prefetch" href="https://ajax.googleapis.com"/>

<link href="img/favicon.ico?<?php echo $anticache; ?>" rel="icon" type="image/ico"/>

<link rel="preload" href="fonts/nunito/XRXV3I6Li01BKofINeaB.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" as="style" href="css/rancak.css?<?php echo $anticache; ?>">
<link rel="preload" as="script" href="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">

<style><?php require ($_SERVER['OG'].'css/font.css')?></style>
<link rel="stylesheet" type="text/css" href="css/rancak.css?<?php echo $anticache; ?>"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.js"><\/script>');</script>
<script async>
$("body,html").bind("touchstart touchmove scroll mousedown DOMMouseScroll mousewheel keyup", function(e){
  $("script").each(function(){
    var get_script = $(this).attr("rancak-hold");
    $(this).attr('src', get_script);
  })
});
</script>



<?php if($page == 'coming-soon') { ?>
  <link rel="preload" href="css/coming-soon.css?<?php echo $anticache; ?>" as="style">
  <link rel="stylesheet" type="text/css" href="css/coming-soon.css?<?php echo $anticache; ?>"/>
<?php } ?>



<?php if($page == 'article') { ?>
  <link rel="preload" href="css/article.css?<?php echo $anticache; ?>" as="style">
  <link rel="stylesheet" type="text/css" href="css/article.css?<?php echo $anticache; ?>"/>
<?php } ?>



</head>



<body>
<h1 class="hide"><?php echo $site_title; ?></h1>
<h2 class="hide"><?php echo $site_desc; ?></h2>