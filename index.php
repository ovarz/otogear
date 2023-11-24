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
<?php require ($_SERVER['OG'].'inc/footer.php')?>
<?php require ($_SERVER['OG'].'inc/base-bottom.php')?>