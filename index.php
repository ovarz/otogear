<?php 
  $page = 'coming-soon';
  require ('inc/base.php')
?>
<?php require ($_SERVER['OG'].'inc/meta.php')?>
<div class="rancak-container coming-soon content_center">
  <div class="rancak-box">
    <div class="rancak-logo content_center">
	  <?php require ($_SERVER['OG'].'img/logo.svg')?>
	</div>
	<div class="rancak-gateway">
	  <?php foreach($gateway_array as $gateway_list){ ?>
        <a title="<?php echo($gateway_list['gateway_type'])?> <?php echo $site_name; ?>" class="rg-link" href="<?php echo($gateway_list['gateway_link'])?>" target="_blank">
          <div class="rg-icon"><?php require ($_SERVER['OG'].'img/icon/square-'.$gateway_list['gateway_icon'].'.svg')?></div>
          <div class="rg-label"><?php echo($gateway_list['gateway_name'])?></div>
        </a>
	  <?php } ?>
	</div>
  </div>
</div>



<!--
<div class="youtube-playlist">
  <div class="youtube-playlist-frame flex_ori thumb-loading">
    <iframe width="560" height="315" class="lazyload" data-original="https://www.youtube.com/embed/videoseries?si=pECkYfnKOxXrsXPA&amp;list=PLX6nLBE9jIqj7J3zhDsCDl0eC2MWhRed5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>
</div>



<div class="article-last">
  <section title="Daftar Artikel" class="article-list">
    <div class="section-title">Artikel</div>
      <div class="article-card">
        <php for ($i=1; $i <= 4 ; $i++) { ?>
          <php require ($_SERVER['OG'].'module/content-list.php')?>
        <php } ?>
      </div>
	</div>
  </section>
</div>
-->
<?php require ($_SERVER['OG'].'inc/footer.php')?>
<?php require ($_SERVER['OG'].'inc/base-bottom.php')?>