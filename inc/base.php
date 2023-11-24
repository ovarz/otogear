<!DOCTYPE html>
<html lang="id">
<base href="/" />
<?php 
  $_SERVER['OG'] = $_SERVER['DOCUMENT_ROOT'] . '/'; 
  //$anticache = date ('s'.'i'.'H'.'d'.'m'.'Y');
  $anticache = '1711230202';
  $site_name = 'OtoGear';
  $site_title = 'OtoGear | Channel yang suka bahas-bahas ringan soal Otomotif.';
  $site_desc = 'Otogear menyajikan video informasi seputar otomotif terkini, test, review, harga, tips, modifikasi, dan komunitas.';
  $site_url = 'https://www.otogear.id';
  
  $gateway_array = array();
  $gateway_array[]=array(
    'gateway_type'=>'Youtube','gateway_link'=>'https://www.youtube.com/@otogear','gateway_icon'=>'yt','gateway_name'=>'@otogear'
  );
  $gateway_array[]=array(
    'gateway_type'=>'TikTok','gateway_link'=>'https://www.tiktok.com/@otogear','gateway_icon'=>'tiktok','gateway_name'=>'@otogear'
  );
  $gateway_array[]=array(
    'gateway_type'=>'Instagram','gateway_link'=>'https://www.instagram.com/otogear_official/','gateway_icon'=>'ig','gateway_name'=>'@otogear_official'
  );
  $gateway_array[]=array(
    'gateway_type'=>'Email','gateway_link'=>'mailto:partnership@otogear.id','gateway_icon'=>'mail','gateway_name'=>'partnership@otogear.id'
  );
  
  $random_title=array("Komnas HAM Olah TKP, Mobil Inafis Tampak di Rumah Dinas Ferdy Sambo","Menhub: Bandara Halim Beroperasi 15 September 2022","Bus Warga AS di Yerusalem Ditembaki, Ibu Hamil Terluka Caesar Darurat","Digerebek Polisi, Markas Judi Online yang Sekap Jamal Kosong","Apel Kebangsaan, Wagub DKI: Jaga Persatuan, Jangan Saling Mencela","Siap-siap, Pemerintah Beri Sinyal Harga BBM Bakal Naik Lagi","Alfamart Akhirnya Polisikan Emak-emak Bermobil Mercy yang Curi Cokelat","Daftar Lengkap Jadwal Diskon Belanja Anggota Hippindo Pekan Ini","Taiwan akan Produksi 1.000 Rudal Antikapal Perang yang Jago di Selat","RI Dapat Penghargaan Swasembada Beras, Kementan Tegaskan Stok Melimpah");
?>