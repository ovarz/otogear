<?php 
  $page = 'article';
  require ('../inc/base.php')
?>
<?php 
  $site_title = 'Wuling Binguo VS Neta V, Mana yang Lebih Keren ?';
  $site_desc = 'Kali ini kita mau membahas Perang Mobil Listrik di Range Harga 300 jutaan, ada Wuling Binguo dan Neta V, kira-kira mobil mana yang akan OG Friends pilih ?';
  require ($_SERVER['OG'].'inc/meta.php')
?>
<?php require ($_SERVER['OG'].'inc/header.php')?>
<div class="rancak-container rancak-detail">
  <div class="rancak-container-max rancak-container-split">
  
    <div class="main-content">
	  <div class="rancak-split-container">
	    <section title="article-detail-head">
		  <div class="article-detail-hero flex_ori thumb-loading">
			<iframe width="560" height="315" class="lazyload" data-original="https://www.youtube.com/embed/Vx1nWunmRSQ?si=LDrPy3IxLjFl-r1C" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
		  </div>
		  <div class="article-detail-info">
            <div class="article-detail-cate">
              <a title="Daftar Artikel" class="article-link-cate" href="artikel/">Artikel</a>
            </div>
            <div class="article-detail-title"><?php echo $site_title; ?></div>
            <div class="article-detail-date">Minggu, 00 September 0000 - 00:00</div>
            <div class="article-detail-desc"><?php echo $site_desc; ?></div>
		  </div>
		</section>
		
		
		
		<?php require ($_SERVER['OG'].'module/share.php')?>
		
		
		
		<main class="article-detail-main">
		  <p>Persaingan Mobil-mobil EV atau Listrik di Indo semakin rancak kali. Di segmen kelas entry level, selama ini dikuasai oleh Wuling Air EV, sepertinya bakalan dapat perlawanan yang alot dari beberapa pesaing baru.</p>
		  <p>Setelah belum lama muncul DFSK dengan <i>SERES</i> - nya, Kini muncul lagi pesaing Wuling juga dari Cina, namanya Neta.</p>
		  <p>Nah, melihat peta pertempuran Mobil-mobil EV di Indo, Wuling gamau kalah set, setelah Air EV menguasai medan perang Mobil EV entry - mid level, Wuling siapkan Wuling BINGO yg segera meluncur kedap suara di Indo, kedap suara? iya kan EV ya....</p>
		  <p>Nah, mumpung lagi anget2 baru ngecharge, kita simak yok, peta pertempuran antara NETA V dan Wuling BINGO.</p>
		  
		  <h3>Desain</h3>
		  <p>Dari segi desain, Neta V memiliki tampilan yang lebih modern dan futuristik. Mobil ini memiliki garis-garis yang tajam dan sudut-sudut yang tegas. Sedangkan Wuling Bingo memiliki desain yang lebih konservatif. Mobil ini memiliki garis-garis yang lembut dan sudut-sudut yang bulat.</p>
		  
		  <h3>Dimensi</h3>
		  <p>Neta V memiliki dimensi yang sedikit perbedaan dari Wuling Bingo. Mobil ini memiliki panjang 4070 mm, lebar 1.690 mm, dan tinggi 1.555 .mm. Sedangkan Wuling Bingo memiliki panjang 3.950 mm, lebar 1.708 mm, dan tinggi 2.560mm.</p>
		  
		  <h3>Spesifikasi</h3>
		  <p>Berikut ini adalah perbandingan spesifikasi antara Neta V dan Wuling Bingo:</p>
		  
		  <h4>Spesifikasi Neta V</h4>
		  <ol>
		    <li>Kapasitas mesin	<b>98 kW (132 PS)</b></li>
		    <li>Torsi <b>220 Nm</b></li>
		    <li>Transmisi <b>CVT</b></li>
		    <li>Kapasitas baterai <b>30,2 kWh</b></li>
		    <li>Jarak tempuh <b>305 km</b></li>
		  </ol>
		</main>
		
		
		
		<?php require ($_SERVER['OG'].'module/share.php')?>
	  
	  
	  
        <section title="Daftar Artikel" class="article-list">
          <div class="section-title">Artikel Berikutnya</div>
          <?php for ($i=1; $i <= 5 ; $i++) { ?>
            <?php require ($_SERVER['OG'].'module/content-list.php')?>
          <?php } ?>
        </section>
	  </div>
	</div>
	<?php require ($_SERVER['OG'].'inc/sidebar.php')?>
	
  </div>
</div>
<?php require ($_SERVER['OG'].'inc/footer.php')?>
<?php require ($_SERVER['OG'].'inc/base-bottom.php')?>