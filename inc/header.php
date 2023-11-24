<header class="rancak-container">
  <div class="rancak-container-max header-container">
    <a title="Kembali ke halaman utama" class="header-link header-logo content_center" href="">
      <?php require ($_SERVER['OG'].'img/logo.svg')?>
    </a>
	<button title="Tampilkan sosial media kami" data-popup="Socmed" class="open-popup header-link header-toggle content_center mobile-only">
	  <?php require ($_SERVER['OG'].'img/icon/header-toggle.svg')?>
	</button>
	<nav id="popup-Socmed" class="rancak-popup popup-socmed">
	  <div class="popup-socmed-list">
        <?php foreach($gateway_array as $gateway_list){ ?>
          <a title="<?php echo($gateway_list['gateway_type'])?> <?php echo $site_name; ?>" class="header-link header-socmed rg-link content_center"
          href="<?php echo($gateway_list['gateway_link'])?>" target="_blank">
            <div class="rg-icon"><?php require ($_SERVER['OG'].'img/icon/square-'.$gateway_list['gateway_icon'].'.svg')?></div>
            <div class="rg-label"><?php echo($gateway_list['gateway_name'])?></div>
          </a>
        <?php } ?>
	  </div>
	</nav>
  </div>
</header>