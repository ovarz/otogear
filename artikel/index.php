<?php 
  $page = 'article';
  require ('../inc/base.php')
?>
<?php 
  $site_title = 'a';
  $site_desc = 'a';
  require ($_SERVER['OG'].'inc/meta.php')
?>
<?php require ($_SERVER['OG'].'inc/header.php')?>
<div class="rancak-container">
  <div class="rancak-container-max rancak-container-split">
    <section title="Daftar Artikel" class="article-list">
	  <div class="section-title">Artikel</div>
      <?php for ($i=1; $i <= 20 ; $i++) { ?>
	    <?php require ($_SERVER['OG'].'module/content-list.php')?>
	  <?php } ?>
	</section>
	<?php require ($_SERVER['OG'].'inc/sidebar.php')?>
  </div>
</div>
<?php require ($_SERVER['OG'].'inc/footer.php')?>
<?php require ($_SERVER['OG'].'inc/base-bottom.php')?>